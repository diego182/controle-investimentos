<?php

declare(strict_types=1);

namespace App\Config;

class DotNotationAccess extends ConfigDecorator
{
    public function get(string $key = null, $default = null)
    {
        $value = parent::get($key, $default);
        if (is_array($value)) {
            return (new Dot($value))->get($key, $default);
        }

        return $value;
    }
}