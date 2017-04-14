<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

final class ConsumerDataService extends AbstractDataService
{

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CONSUMER_GET_REVIEWS = 'consumers/{consumerId}/reviews';

    /**
     * @param $consumerId
     * @param array $queryParts
     * @param array $options
     * @return string
     */
    public function getConsumerReviews($consumerId, array $queryParts = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CONSUMER_GET_REVIEWS;

        return $this->get($endPoint, ['{consumerId}' => $consumerId], $queryParts, $options)->getBody()->getContents();
    }
}
