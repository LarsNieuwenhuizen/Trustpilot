<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

use LarsNieuwenhuizen\Trustpilot\Client;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractDataService
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param string $endPoint
     * @param array $routeParts
     * @param array $queryParts
     * @param array $options
     * @return ResponseInterface
     */
    public function get(string $endPoint, array $routeParts = [], array $queryParts = [], array $options = []): ResponseInterface
    {
        $endPoint = $this->endPointVariableReplacement($endPoint, $routeParts);
        $endPoint = $this->combineQueryParts($endPoint, $queryParts);

        return $this->client->getHttpClient()->request('GET', $endPoint, $options);
    }

    /**
     * @param $endPoint
     * @param array $replacements
     * @return string
     */
    protected function endPointVariableReplacement($endPoint, array $replacements): string
    {
        $regex = '/({[a-zA-Z]+})/';

        return preg_replace_callback(
            $regex,
            function ($match) use ($replacements) {
                return $replacements[$match[1]];
            },
            $endPoint
        );
    }

    /**
     * @param string $endPoint
     * @param array $queryParts
     * @return string
     */
    protected function combineQueryParts(string $endPoint, array $queryParts): string
    {
        $parsedUrl = parse_url($endPoint);
        $combinedQueryParts = [];

        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $combinedQueryParts);
        }

        $allQueryParts = array_merge($queryParts, $combinedQueryParts);
        $query = http_build_query($allQueryParts);

        return $endPoint . '?' . $query;
    }
}
