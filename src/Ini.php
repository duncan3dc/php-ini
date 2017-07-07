<?php

namespace duncan3dc\PhpIni;

class Ini
{
    /**
     * @var array $original The original ini settings to restore.
     */
    private $original = [];

    /**
     * @var array $current The current ini settings.
     */
    private $current = [];


    /**
     * Update an ini setting.
     *
     * @param string $key The name of the setting to update
     * @param string $value The value to set it to
     *
     * @return $this
     */
    public function set($key, $value)
    {
        $key = (string) $key;
        $value = (string) $value;

        # If we've already overridden this setting to the same value then we don't need to do anything
        if (array_key_exists($key, $this->current)) {
            if ($this->current[$key] === $value) {
                return $this;
            }
        }

        # If we've not stashed the original value of this setting then get it now
        if (!array_key_exists($key, $this->original)) {
            $this->original[$key] = ini_get($key);
        }

        ini_set($key, $value);

        return $this;
    }


    /**
     * Get a current ini setting.
     *
     * @param string $key The name of the setting
     *
     * @return string|false
     */
    public function get($key)
    {
        return ini_get($key);
    }


    /**
     * Restore a previous ini setting.
     *
     * @return $this
     */
    public function restore($key)
    {
        if (array_key_exists($key, $this->original)) {
            ini_set($key, $this->original[$key]);
        }

        return $this;
    }


    /**
     * Restore the previous ini settings.
     *
     * @return $this
     */
    public function cleanup()
    {
        foreach ($this->original as $key => $value) {
            ini_set($key, $value);
        }

        $this->original = [];
        $this->current = [];

        return $this;
    }
}