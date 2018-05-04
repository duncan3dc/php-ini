<?php

namespace duncan3dc\PhpIni;

class Ini implements ConfigInterface
{
    /**
     * @var array $original The original ini settings to restore.
     */
    private $original = [];


    /**
     * @inheritDoc
     */
    public function set(string $key, string $value): ConfigInterface
    {
        # If we've not stashed the original value of this setting then get it now
        if (!array_key_exists($key, $this->original)) {
            $this->original[$key] = ini_get($key);
        }

        ini_set($key, $value);

        return $this;
    }


    /**
     * @inheritDoc
     */
    public function get(string $key): ?string
    {
        return ini_get($key);
    }


    /**
     * Restore a previous ini setting.
     *
     * @return $this
     */
    public function restore(string $key): self
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
    public function cleanup(): self
    {
        foreach ($this->original as $key => $value) {
            ini_set($key, $value);
        }

        $this->original = [];

        return $this;
    }
}
