<?php

declare(strict_types=1);

namespace App\Config;

abstract class ConfigDecorator implements ConfigInterface
{
    /**
     * @var ConfigInterface
     */
    private $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function get(string $key = null, $default = null)
    {
        return $this->config->get($key, $default);
    }

    public function set(string $key, $value)
    {
        $this->config->set($key, $value);
    }
}