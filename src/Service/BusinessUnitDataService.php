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
     * @param string $id
     * @param bool $returnResponse
     * @return ResponseInterface|string
     */
    public function getBusinessUnitById($id, $returnResponse = false)
    {
        $replacements = ['{businessUnitId}' => $id];
        $endPoint = $this->endPointVariableReplacement(
            self::TRUSTPILOT_ENDPOINTS_BUSINESS_UNIT_GET_SINGLE,
            $replacements
        );

        if ($returnResponse === true) {
            return $this->get($endPoint);
        }

        return $this->get($endPoint)->getBody()->getContents();
    }
}