<?php

use PHPUnit\Framework\TestCase;
use Unity\Notator\Notator;

class NotatorTest extends TestCase
{
    public function testDenote()
    {
        $notation = new class extends Notator { const SEPARATOR = '_'; };

        $expected = ['a', 'b', 'c'];

        $actual = $notation->denote('a_b_c');

        $this->assertCount(3, $actual);
        $this->assertEquals($expected, $actual);
    }
}
