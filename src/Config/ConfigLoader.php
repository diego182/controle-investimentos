<?php
/**
 * Created by PhpStorm.
 * User: edno
 * Date: 30/10/18
 * Time: 22:10
 */

namespace App\Config;

interface ConfigLoader
{
    public function load($resource): array;
}