<?php

class StupidTest extends PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue(){
	$foo = true;
	$this->assertTrue($foo);
}

    public function testTrueIsFalse(){
        $foo = false;
	$this->assertTrue($foo);
}
}
