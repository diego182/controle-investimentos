<?php

declare(strict_types=1);

namespace App\Config;

class CacheLoader extends LoaderDecorator
{
    public function load($resoruce): array
    {
        if (cache_exits($resoruce)) {
            return $this->pegadocache();
        }

        $config = parent::load();
        $this->botanocache($resoruce, $config);
        return $config;
    }
}