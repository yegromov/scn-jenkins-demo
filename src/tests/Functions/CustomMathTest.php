<?php

namespace ScnJenkinsDemo\Functions;

use PHPUnit\Framework\TestCase;

class CustomMathTest extends TestCase
{
    private CustomMath $customMath;

    protected function setUp(): void
    {
        $this->customMath = new CustomMath();
    }

    protected function tearDown(): void
    {        
    }

    public function testPow(): void
    {
        $this->assertEquals(4, $this->customMath->pow(2,2), '2**2 = 4');
        $this->assertEquals(9, $this->customMath->pow(3,2), '3**2 = 9');
        $this->assertEquals(1, $this->customMath->pow(1,1), '1**1 = 1');
        $this->assertEquals(1, $this->customMath->pow(5,0), '5**0 = 1');
    }
}
