<?php

declare(strict_types=1);

namespace App\Config;

class LogConfigAccess extends ConfigDecorator
{
    private $logger;

    public function __construct(ConfigInterface $config, $logger)
    {
        parent::__construct($config);
        $this->logger = $logger;
    }

    public function get(string $key = null, $default = null)
    {
        $value = parent::get($key, $default);
        $this->logger->log("Fazendo o log de $value");
        return $value;
    }
}