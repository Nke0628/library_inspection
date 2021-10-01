<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\Infection\Infection;

class InfectionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInfection()
    {
        $infection = new Infection();
        $this->assertSame(2, $infection->add( 1, 1 ) );
        $this->assertSame(0, $infection->add( 0, 1 ) );
    }
}
