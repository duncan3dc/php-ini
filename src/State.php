<?php

namespace duncan3dc\PhpIni;

class State
{
    /**
     * @var Ini $ini The php.ini directive manager.
     */
    private $ini;

    /**
     * @var array $settings The settings to use when calling.
     */
    private $settings = [];


    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->ini = new Ini;
    }


    /**
     * Set an ini directive to be used when calling.
     *
     * @param string $key The name of the setting
     * @param string $value The value to use
     *
     * @return $this
     */
    public function set($key, $value)
    {
        $key = (string) $key;
        $value = (string) $value;

        $this->settings[$key] = $value;

        return $this;
    }


    /**
     * Run some code using the previous provided ini settings.
     *
     * @param callable $callable $the code to run
     * @param mixed $params Any parameters to pass to the callable
     *
     * @return mixed The result of the callable
     */
    public function call(callable $callable, ...$params)
    {
        foreach ($this->settings as $key => $value) {
            $this->ini->set($key, $value);
        }

        $exception = null;
        try {
            $result = $callable(...$params);
        } catch (\Exception $e) {
            $exception = $e;
        } catch (\Throwable $e) {
            $exception = $e;
        }

        $this->ini->cleanup();

        if ($exception) {
            throw $exception;
        }

        return $result;
    }
}