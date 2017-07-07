<?php

namespace duncan3dc\PhpIniTests;

use duncan3dc\PhpIni\State;

class StateTest extends \PHPUnit_Framework_TestCase
{
    private $state;

    public function setUp()
    {
        $this->state = new State;
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


    public function testSet()
    {
        ini_set("include_path", "/tmp/default");

        $this->state->set("include_path", "/tmp/override");

        $this->assertSame("/tmp/default", ini_get("include_path"));

        $this->state->call(function () {
            $this->assertSame("/tmp/override", ini_get("include_path"));
        });

        $this->assertSame("/tmp/default", ini_get("include_path"));
    }
}
