<?php

namespace RedisClient\Tests;

use RedisClient\PredisClient,
    RedisClient\Tests\BaseModuleTest;

class PredisTest extends BaseModuleTest
{

    protected $predisClient;

    public function setUp()
    {
        parent::setUp();
        $this->assertArrayHasKey('redisclient', $this->config);
        $this->predisClient = new PredisClient($this->config['redisclient']['redis']);
    }

    public function testInstance()
    {
        $this->assertInstanceOf('RedisClient\PredisClient', $this->predisClient);
    }
}
