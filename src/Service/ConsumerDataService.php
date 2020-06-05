<?php
declare(strict_types=1);

namespace LarsNieuwenhuizen\Trustpilot\Service;

final class ConsumerDataService extends AbstractDataService
{

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CONSUMER_GET_REVIEWS = 'consumers/{consumerId}/reviews';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CONSUMER_GET_PROFILE = 'consumers/{consumerId}/profile';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CONSUMER_GET = 'consumers/{consumerId}';

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

    /**
     * @param $consumerId
     * @param array $queryParts
     * @param array $options
     * @return string
     */
    public function getConsumerProfile($consumerId, array $queryParts = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CONSUMER_GET_PROFILE;

        return $this->get($endPoint, ['{consumerId}' => $consumerId], $queryParts, $options)->getBody()->getContents();
    }

    /**
     * @param $consumerId
     * @param array $queryParts
     * @param array $options
     * @return string
     */
    public function getConsumer($consumerId, array $queryParts = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CONSUMER_GET;

        return $this->get($endPoint, ['{consumerId}' => $consumerId], $queryParts, $options)->getBody()->getContents();
    }
}
