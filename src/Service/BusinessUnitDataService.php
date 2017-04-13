<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

use Psr\Http\Message\ResponseInterface;

final class BusinessUnitDataService extends AbstractDataService
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
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getAllBusinessUnits($returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_ALL;

        if ($returnResponse === true) {
            return $this->get($endPoint);
        }

        return $this->get($endPoint)->getBody()->getContents();
    }

    /**
     * $client->businessUnitDataService->getBusinessUnit('YouBusinessUnitId');
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnit(string $id, array $query = [], array $options = [], bool $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_SINGLE;
        $response = $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }

    /**
     * $client->businessUnitDataService->getBusinessUnitReviews('YouBusinessUnitId');
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitReviews(string $id, array $query = [], array $options = [], bool $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_REVIEWS;
        $response = $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }

    /**
     * $client->businessUnitDataService->getBusinessUnitCategories('YouBusinessUnitId');
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitCategories(string $id, array $query = [], array $options = [], bool $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_CATEGORIES;
        $response = $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }

    /**
     * $businessUnit = $client->businessDataService->getBusinessUnitWebLinks('541YouBusinessUnitId', ['locale' => 'nl-NL']);
     *
     * @param string $id
     * @param array $query
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitWebLinks(string $id, array $query = [], array $options = [], $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_WEB_LINKS;
        $response = $this->get($endPoint, ['{businessUnitId}' => $id], $query, $options);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }
}
