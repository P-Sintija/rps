<?php

namespace Tests;


use PHPUnit\Framework\TestCase;
use Rps\Patterns\Paper;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;

class RockTest extends TestCase
{
    public function testName(): void
    {
        $rock = new Rock();
        $this->assertEquals('Rock', $rock->getName());
    }

    public function testWinnerConditions(): void
    {
        $rock = new Rock();
        $scissors = new Scissors();
        $paper = new Paper();

        $this->assertTrue(true === $rock->wins($scissors));
        $this->assertNotTrue(true === $rock->wins($paper));
    }

}

