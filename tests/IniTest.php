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
        $this->ini->set("include_path", "/tmp/ini-stuff");

        $result = $this->ini->get("include_path");
        $this->assertSame("/tmp/ini-stuff", $result);
    }
    public function testGet2()
    {
        $result = $this->ini->get("does_not_exist");
        $this->assertNull($result);
    }


    public function testGetDefault()
    {
        $expected = ini_get("include_path");
        if (!$expected) {
            $this->markTestSkipped("Unable to find the current include_path");
            return;
        }

        $result = $this->ini->get("include_path");

        $this->assertSame($expected, $result);
    }


    public function testRestore()
    {
        ini_set("include_path", "/tmp/restore");

        $this->ini->set("include_path", "/tmp/ini-stuff");

        $this->assertSame("/tmp/ini-stuff", $this->ini->get("include_path"));

        $result = $this->ini->restore("include_path");
        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/restore", ini_get("include_path"));
    }


    public function testCleanup()
    {
        ini_set("include_path", "/tmp/cleanup");

        $this->ini->set("include_path", "/tmp/ini-stuff");

        $result = $this->ini->cleanup();
        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/cleanup", ini_get("include_path"));
    }


    public function testExternalActions()
    {
        $this->ini->set("include_path", "/tmp/custom");

        ini_set("include_path", "/tmp/external");
        $this->assertSame("/tmp/external", $this->ini->get("include_path"));

        $this->ini->set("include_path", "/tmp/custom");
        $this->assertSame("/tmp/custom", $this->ini->get("include_path"));
    }
}
