<?php

use PHPUnit\Framework\TestCase;
use Unity\Notator\DotNotator;

class DotNotatorTest extends TestCase
{
    public function testDenote()
    {
        $dotNotation = new DotNotator();

        $expected = ['a', 'b', 'c'];

        $actual = $dotNotation->denote('a.b.c');

        $this->assertCount(3, $actual);
        $this->assertEquals($expected, $actual);
    }
}
