<?php

namespace duncan3dc\PhpIniTests;

use duncan3dc\PhpIni\Ini;
use duncan3dc\PhpIni\Settings;
use duncan3dc\PhpIni\State;
use PHPUnit\Framework\TestCase;

use function ini_get;
use function ini_set;

final class StateTest extends TestCase
{
    /** @var State */
    private $state;


    /** @inheritDoc */
    protected function setUp(): void
    {
        $this->state = new State();
    }


    public function testCall1(): void
    {
        $hasRun = false;

        $result = $this->state->call(function () use (&$hasRun) {
            $hasRun = true;
            return "success";
        });

        $this->assertTrue($hasRun);
        $this->assertSame("success", $result);
    }


    public function testCallParams1(): void
    {
        $result = $this->state->call(function ($input) {
            return $input;
        }, 745);

        $this->assertSame(745, $result);
    }


    public function testCallException1(): void
    {
        ini_set(Settings::INCLUDE_PATH, "/tmp/default");

        $this->state->set(Settings::INCLUDE_PATH, "/tmp/override");

        $this->assertSame("/tmp/default", ini_get(Settings::INCLUDE_PATH));

        try {
            $this->state->call(function () {
                $this->assertSame("/tmp/override", ini_get(Settings::INCLUDE_PATH));
                throw new \Exception("Whoops");
            });
        } catch (\Exception $e) {
            $this->assertSame("Whoops", $e->getMessage());
        }

        # Ensure we still cleaned up, even if an exception was thrown
        $this->assertSame("/tmp/default", ini_get(Settings::INCLUDE_PATH));
    }


    public function testSet1(): void
    {
        ini_set(Settings::INCLUDE_PATH, "/tmp/default");

        $this->state->set(Settings::INCLUDE_PATH, "/tmp/override");

        $this->assertSame("/tmp/default", ini_get(Settings::INCLUDE_PATH));

        $this->state->call(function () {
            $this->assertSame("/tmp/override", ini_get(Settings::INCLUDE_PATH));
        });

        $this->assertSame("/tmp/default", ini_get(Settings::INCLUDE_PATH));
    }


    public function testGet1(): void
    {
        $this->state->set(Settings::INCLUDE_PATH, "/tmp/override");

        $this->assertSame("/tmp/override", $this->state->get(Settings::INCLUDE_PATH));
    }


    public function testGet2(): void
    {
        $this->assertNull($this->state->get("does_not_exist"));
    }
}
