<?php

namespace duncan3dc\PhpIniTests;

use duncan3dc\PhpIni\Ini;
use PHPUnit\Framework\TestCase;
use function ini_get;
use function ini_set;

class IniTest extends TestCase
{
    private $ini;

    public function setUp()
    {
        $this->ini = new Ini();
    }


    public function tearDown()
    {
        $this->ini->cleanup();
    }


    public function testSet1()
    {
        $result = $this->ini->set("include_path", "/tmp/does-not-exist");

        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/does-not-exist", ini_get("include_path"));
    }


    public function testGet1()
    {
        $this->ini->set(Ini::INCLUDE_PATH, "/tmp/ini-stuff");

        $result = $this->ini->get(Ini::INCLUDE_PATH);
        $this->assertSame("/tmp/ini-stuff", $result);
    }
    public function testGet2()
    {
        $result = $this->ini->get("does_not_exist");
        $this->assertNull($result);
    }


    public function testGetDefault()
    {
        $expected = ini_get(Ini::INCLUDE_PATH);
        if (!$expected) {
            $this->markTestSkipped("Unable to find the current include_path");
            return;
        }

        $result = $this->ini->get(Ini::INCLUDE_PATH);

        $this->assertSame($expected, $result);
    }


    public function testRestore()
    {
        ini_set(Ini::INCLUDE_PATH, "/tmp/restore");

        $this->ini->set(Ini::INCLUDE_PATH, "/tmp/ini-stuff");

        $this->assertSame("/tmp/ini-stuff", $this->ini->get(Ini::INCLUDE_PATH));

        $result = $this->ini->restore(Ini::INCLUDE_PATH);
        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/restore", ini_get(Ini::INCLUDE_PATH));
    }


    public function testCleanup()
    {
        ini_set(Ini::INCLUDE_PATH, "/tmp/cleanup");

        $this->ini->set(Ini::INCLUDE_PATH, "/tmp/ini-stuff");

        $result = $this->ini->cleanup();
        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/cleanup", ini_get(Ini::INCLUDE_PATH));
    }


    public function testExternalActions()
    {
        $this->ini->set(Ini::INCLUDE_PATH, "/tmp/custom");

        ini_set(Ini::INCLUDE_PATH, "/tmp/external");
        $this->assertSame("/tmp/external", $this->ini->get(Ini::INCLUDE_PATH));

        $this->ini->set(Ini::INCLUDE_PATH, "/tmp/custom");
        $this->assertSame("/tmp/custom", $this->ini->get(Ini::INCLUDE_PATH));
    }
}
