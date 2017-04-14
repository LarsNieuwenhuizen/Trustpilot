<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

use Psr\Http\Message\ResponseInterface;

class ConsumerDataService extends AbstractDataService
{

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CONSUMER_GET_REVIEWS = 'consumers/{consumerId}/reviews';

    /**
     * @param $consumerId
     * @param array $queryParts
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getConsumerReviews($consumerId, array $queryParts = [], array $options = [], bool $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CONSUMER_GET_REVIEWS;
        $response = $this->get($endPoint, ['{consumerId}' => $consumerId]);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }
}
