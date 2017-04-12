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
    public function setApiKeyReturnsVoid()
    {
        $this->assertNull($this->subject->setApiKey('test'));
    }
}