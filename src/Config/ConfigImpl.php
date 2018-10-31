<?php

namespace App\Config;

class ConfigImpl implements ConfigInterface
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Method to return a config key
     *
     * @param string $key The key that should be get
     * @param mixed $default
     *
     * @return array|string|null
     */
    public function get(string $key = null, $default = null)
    {
        return $this->config[$key] ?? $default;
    }

    public function set(string $key, $value)
    {
        $this->config[$key] = $value;
    }
}