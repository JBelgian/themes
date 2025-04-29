<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicAddition()
    {
        $result = 2 + 3;
        $this->assertEquals(5, $result);
    }
}