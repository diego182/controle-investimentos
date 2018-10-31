<?php

declare(strict_types=1);

namespace App\Config;

class FileLoader implements ConfigLoader
{
    /**
     * @var string
     */
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function load(): ConfigInterface
    {
        // carrega e instancia aqui
    }
}