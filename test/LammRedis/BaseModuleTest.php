<?php

namespace RedisClient\Tests;

use RedisClient\Module as RedisClientModule,
    RedisClient\Tests\Bootstrap,
    Zend\ServiceManager\Config as ServiceConfig,
    Zend\ServiceManager\ServiceManager;

abstract class BaseModuleTest extends \PHPUnit_Framework_TestCase
{

    protected $config;
    protected $serviceManager;

    public function setUp()
    {
        $this->serviceManager = Bootstrap::getServiceManager();
        $this->config = $this->serviceManager->get('config');
    }

}
