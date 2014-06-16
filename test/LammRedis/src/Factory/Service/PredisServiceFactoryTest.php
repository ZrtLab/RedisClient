<?php

namespace RedisClient\Tests\Factory\Service;

use RedisClient\Tests\BaseModuleTest,
    RedisClient\Factory\Service\PredisServiceFactory;

class PredisServiceFactoryTest extends BaseModuleTest
{

    public function testConfig()
    {
        $this->assertNotEmpty($this->config);
        $this->assertArrayHasKey('redisclient', $this->config);
    }

    public function testCreateService()
    {
        $serviceLocator = $this->getMock('Zend\\ServiceManager\\ServiceLocatorInterface');
        $this->assertInternalType('array', $this->config);

        $serviceLocator
            ->expects($this->any())
            ->method('get')
            ->with('config')
            ->will($this->returnValue($this->config));

        $factory = new PredisServiceFactory();
        $this->assertNotEmpty($factory);

        $this->assertInstanceOf(
            'RedisClient\PredisClient',
            $factory->createService($serviceLocator)
        );
    }

}
