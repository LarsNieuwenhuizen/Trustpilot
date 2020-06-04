<?php
declare(strict_types=1);

namespace LarsNieuwenhuizen\Trustpilot\Service;

class CategoryDataService extends AbstractDataService
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
     * @return string
     */
    public function getCategory($id, array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CATEGORIES_GET_SINGLE;

        return $this->get($endPoint, ['{categoryId}' => $id], $query, $options)->getBody()->getContents();
    }

    /**
     * @param $id
     * @param array $query
     * @param array $options
     * @return string
     */
    public function getCategoryBusinessUnits($id, array $query = [], array $options = []): string
    {
        $endPoint = self::TRUSTPILOT_ENDPOINTS_CATEGORIES_GET_BUSINESS_UNITS;

        return $this->get($endPoint, ['{categoryId}' => $id], $query, $options)->getBody()->getContents();
    }
}
