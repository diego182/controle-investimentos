<?php

declare(strict_types=1);

namespace App\Config;

class LoaderDecorator implements ConfigLoader
{
    /**
     * @var ConfigLoader
     */
    private $configLoader;

    public function __construct(ConfigLoader $configLoader)
    {
        $this->configLoader = $configLoader;
    }

    public function load(): array
    {
        return $this->configLoader->load();
    }
}