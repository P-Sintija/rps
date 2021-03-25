<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Paper;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;

class ScissorsTest extends TestCase
{
    public function testName(): void
    {
        $rock = new Scissors();
        $this->assertEquals('Scissors', $rock->getName());
    }

    public function testWinnerConditions(): void
    {
        $scissors = new Scissors();
        $rock = new Rock();
        $paper = new Paper();

        $this->assertTrue(true === $scissors->wins($paper));
        $this->assertNotTrue(true === $scissors->wins($rock));
    }

}
