<?php
namespace LarsNieuwenhuizen\Trustpilot\Service;

use Psr\Http\Message\ResponseInterface;

final class BusinessUnitDataService extends AbstractDataService
{

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
     * @param string $id
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitById(string $id, array $options = [], bool $returnResponse = false)
    {
        $replacements = ['{businessUnitId}' => $id];
        $endPoint = $this->endPointVariableReplacement(
            self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_SINGLE,
            $replacements
        );

        if ($returnResponse === true) {
            return $this->get($endPoint, $options);
        }

        return $this->get($endPoint, $options)->getBody()->getContents();
    }

    /**
     * @param string $id
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitReviewsByBusinessUnitId(string $id, array $options = [], bool $returnResponse = false)
    {
        $replacements = ['{businessUnitId}' => $id];
        $endPoint = $this->endPointVariableReplacement(
            self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_REVIEWS,
            $replacements
        );

        if ($returnResponse === true) {
            return $this->get($endPoint, $options);
        }

        return $this->get($endPoint, $options)->getBody()->getContents();
    }

    /**
     * @param string $id
     * @param array $options
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitCategoriesByBusinessUnitId(string $id, array $options = [], bool $returnResponse = false)
    {
        $replacements = ['{businessUnitId}' => $id];
        $endPoint = $this->endPointVariableReplacement(
            self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_CATEGORIES,
            $replacements
        );

        if ($returnResponse === true) {
            return $this->get($endPoint, $options);
        }

        return $this->get($endPoint, $options)->getBody()->getContents();
    }
}