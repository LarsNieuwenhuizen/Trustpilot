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
     * @param array $options
     * @return ResponseInterface
     */
    public function get(string $endPoint, array $options)
    {
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
}