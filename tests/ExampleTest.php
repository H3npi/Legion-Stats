<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

    public function testBoolean() {
        $this->assertTrue(1 == 1);
    }

    public function testPushAndPop() {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testEmpty() {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    public function testOne() {
        $this->assertTrue(true);
    }

    /**
     * @depends testOne
     */
    public function testTwo() {
        
    }

}
