<?php

namespace duncan3dc\PhpIniTests;

use duncan3dc\PhpIni\Ini;
use duncan3dc\PhpIni\Settings;
use PHPUnit\Framework\TestCase;

use function ini_get;
use function ini_set;

final class IniTest extends TestCase
{
    /** @var Ini */
    private $ini;


    /** @inheritDoc */
    protected function setUp(): void
    {
        $this->ini = new Ini();
    }


    /** @inheritDoc */
    protected function tearDown(): void
    {
        $this->ini->cleanup();
    }


    public function testSet1(): void
    {
        $result = $this->ini->set("include_path", "/tmp/does-not-exist");

        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/does-not-exist", ini_get("include_path"));
    }


    public function testGet1(): void
    {
        $this->ini->set(Settings::INCLUDE_PATH, "/tmp/ini-stuff");

        $result = $this->ini->get(Settings::INCLUDE_PATH);
        $this->assertSame("/tmp/ini-stuff", $result);
    }


    public function testGet2(): void
    {
        $result = $this->ini->get("does_not_exist");
        $this->assertNull($result);
    }


    public function testGetDefault1(): void
    {
        $expected = ini_get(Settings::INCLUDE_PATH);
        if (!$expected) {
            $this->markTestSkipped("Unable to find the current include_path");
            return;
        }

        $result = $this->ini->get(Settings::INCLUDE_PATH);

        $this->assertSame($expected, $result);
    }


    public function testRestore1(): void
    {
        ini_set(Settings::INCLUDE_PATH, "/tmp/restore");

        $this->ini->set(Settings::INCLUDE_PATH, "/tmp/ini-stuff");

        $this->assertSame("/tmp/ini-stuff", $this->ini->get(Settings::INCLUDE_PATH));

        $result = $this->ini->restore(Settings::INCLUDE_PATH);
        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/restore", ini_get(Settings::INCLUDE_PATH));
    }


    public function testCleanup1(): void
    {
        ini_set(Settings::INCLUDE_PATH, "/tmp/cleanup");

        $this->ini->set(Settings::INCLUDE_PATH, "/tmp/ini-stuff");

        $result = $this->ini->cleanup();
        $this->assertSame($this->ini, $result);
        $this->assertSame("/tmp/cleanup", ini_get(Settings::INCLUDE_PATH));
    }


    public function testExternalActions1(): void
    {
        $this->ini->set(Settings::INCLUDE_PATH, "/tmp/custom");

        ini_set(Settings::INCLUDE_PATH, "/tmp/external");
        $this->assertSame("/tmp/external", $this->ini->get(Settings::INCLUDE_PATH));

        $this->ini->set(Settings::INCLUDE_PATH, "/tmp/custom");
        $this->assertSame("/tmp/custom", $this->ini->get(Settings::INCLUDE_PATH));
    }
}
