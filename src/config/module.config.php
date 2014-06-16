<?php

    return array(
        'redisclient' => array(
            'redis' => array(
                'scheme' => 'tcp',
                'host'   => '127.0.0.1',
                'port'   => 6379,
            ),
        ),
        'service_manager' => array(
            'factories' => array(
                'PredisClient' => 'RedisClient\Factory\Service\PredisServiceFactory'
            )
        )
    );
