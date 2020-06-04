<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

class BusinessUnitDataService extends AbstractDataService
{

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_ALL = 'business-units/all';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_SINGLE = 'business-units/{businessUnitId}';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_REVIEWS = 'business-units/{businessUnitId}/reviews';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_CATEGORIES = 'business-units/{businessUnitId}/categories';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_WEB_LINKS = 'business-units/{businessUnitId}/web-links';

    /**
     * @param array $query
     * @param array $options
     * @return string
     */
    public function getAllBusinessUnits(array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_ALL;

        return $this->get($endPoint, [], $query, $options)->getBody()->getContents();
    }

    /**
     * $client->businessUnitDataService->getBusinessUnit('YouBusinessUnitId');
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @return string
     */
    public function getBusinessUnit(string $id, array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_SINGLE;

        return $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options)->getBody()->getContents();
    }

    /**
     * $client->businessUnitDataService->getBusinessUnitReviews('YouBusinessUnitId');
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @return string
     */
    public function getBusinessUnitReviews(string $id, array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_REVIEWS;

        return $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options)->getBody()->getContents();
    }

    /**
     * $client->businessUnitDataService->getBusinessUnitCategories('YouBusinessUnitId');
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @return string
     */
    public function getBusinessUnitCategories(string $id, array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_CATEGORIES;

        return $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options)->getBody()->getContents();
    }

    /**
     * $businessUnit = $client->businessDataService->getBusinessUnitWebLinks('541YouBusinessUnitId', ['locale' => 'nl-NL']);
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @return string
     */
    public function getBusinessUnitWebLinks(string $id, array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_WEB_LINKS;

        return $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options)->getBody()->getContents();
    }
}
