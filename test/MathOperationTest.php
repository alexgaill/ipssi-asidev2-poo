<?php

use Cours\Introduction\MathOperation;
use PHPUnit\Framework\TestCase;

class MathOperationTest extends TestCase {

    public function testAdditionWithNumber()
    {
        $classe = new MathOperation;
        $addition = $classe->addition(3,4);

        $this->assertEquals(7, $addition);
    }

    /**
     * @expectedException     InvalidArgumentException
     * @expectedExceptionCode 1
     */
    public function testAdditionWithLetters()
    {
        $classe = new MathOperation;
        $addition = $classe->addition("a","trois");

        // throw new \InvalidArgumentException("InvalidArgumentException", 1);
    }
}