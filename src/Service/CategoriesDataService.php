<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

use Psr\Http\Message\ResponseInterface;

final class CategoriesDataService extends AbstractDataService
{

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CATEGORIES_GET_SINGLE = 'categories/{categoryId}';

    /**
     * @const string
     */
    const TRUSTPILOT_ENDPOINTS_CATEGORIES_GET_BUSINESS_UNITS = 'categories/{categoryId}/business-units';

    /**
     * @param $id
     * @param array $query
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getCategory($id, array $query = [], array $options = [], bool $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CATEGORIES_GET_SINGLE;

        $response = $this->get($endPoint, ['{categoryId}' => $id], $query, $options);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }

    /**
     * @param $id
     * @param array $query
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getCategoryBusinessUnits($id, array $query = [], array $options = [], bool $returnResponse = false)
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CATEGORIES_GET_BUSINESS_UNITS;

        $response = $this->get($endPoint, ['{categoryId}' => $id], $query, $options);

        if ($returnResponse === true) {
            return $response;
        }

        return $response->getBody()->getContents();
    }
}
