<?php

namespace duncan3dc\PhpIni;

interface ConfigInterface
{
    /**
     * Update an ini setting.
     *
     * @param string $key The name of the setting to update
     * @param string $value The value to set it to
     *
     * @return ConfigInterface
     */
    public function set(string $key, string $value): ConfigInterface;


    /**
     * Get a current ini setting.
     *
     * @param string $key The name of the setting
     *
     * @return ?string
     */
    public function get(string $key): ?string;
}
