<?php

namespace RedisClient;

use Predis\Client;

class PredisClient extends Client
{

    public function __construct($parameters = null, $options = null)
    {
        parent::__construct($parameters, $options);

        return $this;
    }

}
