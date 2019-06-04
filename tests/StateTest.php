<?php

namespace duncan3dc\PhpIniTests;

use duncan3dc\PhpIni\Ini;
use duncan3dc\PhpIni\State;
use PHPUnit\Framework\TestCase;
use function ini_get;
use function ini_set;

class StateTest extends TestCase
{
    private $state;

    public function setUp()
    {
        $this->state = new State();
    }


    public function testCall()
    {
        $hasRun = false;

        $result = $this->state->call(function () use (&$hasRun) {
            $hasRun = true;
            return "success";
        });

        $this->assertTrue($hasRun);
        $this->assertSame("success", $result);
    }


    public function testCallParams()
    {
        $result = $this->state->call(function ($input) {
            return $input;
        }, 745);

        $this->assertSame(745, $result);
    }


    public function testCallException()
    {
        ini_set(Ini::INCLUDE_PATH, "/tmp/default");

        $this->state->set(Ini::INCLUDE_PATH, "/tmp/override");

        $this->assertSame("/tmp/default", ini_get(Ini::INCLUDE_PATH));

        try {
            $this->state->call(function () {
                $this->assertSame("/tmp/override", ini_get(Ini::INCLUDE_PATH));
                throw new \Exception("Whoops");
            });
        } catch (\Exception $e) {
            $this->assertSame("Whoops", $e->getMessage());
        }

        # Ensure we still cleaned up, even if an exception was thrown
        $this->assertSame("/tmp/default", ini_get(Ini::INCLUDE_PATH));
    }


    public function testSet()
    {
        ini_set(Ini::INCLUDE_PATH, "/tmp/default");

        $this->state->set(Ini::INCLUDE_PATH, "/tmp/override");

        $this->assertSame("/tmp/default", ini_get(Ini::INCLUDE_PATH));

        $this->state->call(function () {
            $this->assertSame("/tmp/override", ini_get(Ini::INCLUDE_PATH));
        });

        $this->assertSame("/tmp/default", ini_get(Ini::INCLUDE_PATH));
    }


    public function testGet1()
    {
        $this->state->set(Ini::INCLUDE_PATH, "/tmp/override");

        $this->assertSame("/tmp/override", $this->state->get(Ini::INCLUDE_PATH));
    }
    public function testGet3()
    {
        $this->assertNull($this->state->get("does_not_exist"));
    }
}
