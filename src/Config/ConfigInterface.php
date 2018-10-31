<?php
/**
 * Created by PhpStorm.
 * User: diego182
 * Date: 22/10/18
 * Time: 23:16
 */

namespace App\Config;

/**
 * Interface ConfigInterface
 * Interface for configure drivers
 * @package App\Config
 */
interface ConfigInterface
{
    /**
     * Method to return a config key
     *
     * @param string $key The key that should be get
     * @param mixed $default
     *
     * @return mixed
     */
    public function get(string $key = null, $default = null);

    /**
     * @param string $key
     * @param $value
     */
    public function set(string $key, $value);
}