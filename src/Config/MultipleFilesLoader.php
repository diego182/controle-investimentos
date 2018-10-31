<?php

declare(strict_types=1);

namespace App\Config;

class MultipleFilesLoader implements ConfigLoader
{
    /**
     * @var array
     */
    private $loaders;

    /**
     * MultipleFilesLoader constructor.
     * @param array $loaders
     */
    public function __construct(array $loaders)
    {
        $this->loaders = $loaders;
    }

    public function load(): ConfigInterface
    {
        foreach ($this->loaders as $loader) {
            $loader->load();
        }
    }
}