<?php

namespace RedisClient\Tests;

class ModuleTest extends BaseModuleTest
{

    public function setUp()
    {
        parent::setUp();
    }

    public function testConfig()
    {
        $this->assertNotEmpty($this->config);
        $this->assertInternalType('array', $this->config);
    }

    public function testConfigService()
    {
        $this->assertArrayHasKey('service_manager', $this->config);
        $this->assertNotEmpty($this->config['service_manager']);
    }

    public function testPredisClient()
    {
        $this->assertInstanceOf("Predis\Client",$this->serviceManager->get("PredisClient"));
    }

    public function tearDown()
    {
        parent::tearDown();
    }

}
