<?php

namespace RedisClient\Factory\Service;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface,
    RedisClient\PredisClient;

class PredisServiceFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');

        return new PredisClient($config['redisclient']['redis']);
    }

}
