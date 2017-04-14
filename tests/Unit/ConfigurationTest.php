<?php
declare(strict_types=1);

namespace LarsNieuwenhuizen\Trustpilot\Tests\Unit;

use LarsNieuwenhuizen\Trustpilot\Configuration;
use PHPUnit\Framework\TestCase;

final class ConfigurationTest extends TestCase
{

    /**
     * @var Configuration
     */
    protected $subject;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->subject = new Configuration();
        parent::setUp();
    }

    /**
     * @test
     */
    public function setApiKeyReturnsConfigurationObject()
    {
        $this->assertInstanceOf(Configuration::class, $this->subject->setApiKey('test'));
    }

    /**
     * @test
     */
    public function getApiKeyReturnsSetValue()
    {
        $this->subject->setApiKey('test');
        $this->assertEquals('test', $this->subject->getApiKey());
    }

    /**
     * @test
     */
    public function setBaseUrlReturnsConfigurationObject()
    {
        $this->assertInstanceOf(Configuration::class, $this->subject->setBaseUrl('test'));
    }

    /**
     * @test
     */
    public function getBaseUrlReturnsSetValue()
    {
        $this->subject->setBaseUrl('test');
        $this->assertEquals('test', $this->subject->getBaseUrl());
    }

    /**
     * @test
     */
    public function setBasePathReturnsConfigurationObject()
    {
        $this->assertInstanceOf(Configuration::class, $this->subject->setBasePath('test'));
    }

    /**
     * @test
     */
    public function getBasePathReturnsSetValue()
    {
        $this->subject->setBasePath('test');
        $this->assertEquals('test', $this->subject->getBasePath());
    }

    /**
     * @test
     */
    public function setBusinessUnitIdReturnsConfigurationObject()
    {
        $this->assertInstanceOf(Configuration::class, $this->subject->setBusinessUnitId('test'));
    }

    /**
     * @test
     */
    public function getBusinessUnitIdReturnsSetValue()
    {
        $this->subject->setBusinessUnitId('test');
        $this->assertEquals('test', $this->subject->getBusinessUnitId());
    }

    /**
     * @test
     */
    public function isAllowedRedirectsIsFalseByDefault()
    {
        $this->assertFalse($this->subject->isAllowRedirects());
    }

    /**
     * @test
     */
    public function isAllowedRedirectsReturnsTrueIfSet()
    {
        $this->subject->setAllowRedirects(true);
        $this->assertTrue($this->subject->isAllowRedirects());
    }

    /**
     * @test
     */
    public function defaultResultsPerPageIsTen()
    {
        $this->assertEquals(10, $this->subject->getDefaultResultsPerPage());
    }

    /**
     * @test
     */
    public function defaultSortOrderIsCreatedAtDescending()
    {
        $this->assertEquals('createdat.desc', $this->subject->getDefaultOrderBy());
    }

    /**
     * @test
     */
    public function setDefaultSortOrderOverridesThePreset()
    {
        $this->subject->setDefaultOrderBy('createdat.asc');

        $this->assertEquals('createdat.asc', $this->subject->getDefaultOrderBy());
    }

    /**
     * @test
     */
    public function setDefaultResultsPerPageOverridesThePreset()
    {
        $this->subject->setDefaultResultsPerPage(15);

        $this->assertEquals(15, $this->subject->getDefaultResultsPerPage());
    }
}