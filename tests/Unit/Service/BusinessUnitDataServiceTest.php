<?php
namespace LarsNieuwenhuizen\Trustpilot\Tests\Unit\Service;

use LarsNieuwenhuizen\Trustpilot\Client;
use LarsNieuwenhuizen\Trustpilot\Service\BusinessUnitDataService;
use PHPUnit\Framework\TestCase;

class BusinessUnitDataServiceTest extends TestCase
{

    /**
     * @test
     */
    public function getAllBusinessUnitsExecutesAGetRequestAndReturnsTheResultBody()
    {
        $clientMock = $this->getMockBuilder(Client::class)->disableOriginalConstructor()->getMock();
        $orgSubject = new BusinessUnitDataService($clientMock);

        $businessUnitDataService = new BusinessUnitDataService($clientMock);
        $subject = new \ReflectionClass($businessUnitDataService);
        $endPointVariableReplacement = $subject->getMethod('endPointVariableReplacement');
        $endPointVariableReplacement->setAccessible(true);

        $this->assertEquals(
            'my/variable/route',
            $endPointVariableReplacement->invoke($orgSubject, 'my/{var}/route', ['{var}' => 'variable'])
        );
    }

    /**
     * @test
     */
    public function combineQueryPartsReturnsACorrectUrlWithQueryStringFromGivenParameters()
    {
        $clientMock = $this->getMockBuilder(Client::class)->disableOriginalConstructor()->getMock();
        $orgSubject = new BusinessUnitDataService($clientMock);

        $businessUnitDataService = new BusinessUnitDataService($clientMock);
        $subject = new \ReflectionClass($businessUnitDataService);
        $combineQueryParts = $subject->getMethod('combineQueryParts');
        $combineQueryParts->setAccessible(true);

        $this->assertEquals(
            'my/endpoint?with=var&and=var2&orderBy=createdat.desc&perPage=10&not=toBeForgotten',
            $combineQueryParts->invoke(
                $orgSubject,
                'my/endpoint?not=toBeForgotten', [
                    'with' => 'var',
                    'and' => 'var2',
                    'orderBy' => 'createdat.desc',
                    'perPage' => 10
                ]
            )
        );

        $this->assertEquals(
            'my/endpoint?with=var&and=var2&not=toBeForgotten&orderBy=&perPage=0',
            $combineQueryParts->invoke(
                $orgSubject,
                'my/endpoint?not=toBeForgotten', [
                    'with' => 'var',
                    'and' => 'var2'
                ]
            )
        );
    }
}
