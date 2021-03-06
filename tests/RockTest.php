<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\Pattern;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;

class RockTest extends TestCase
{

    public function testImplementation(): void
    {
        $rock = new Rock();
        $this->assertInstanceOf(Pattern::class, $rock);
    }

    public function testName(): void
    {
        $rock = new Rock();
        $this->assertEquals('Rock', $rock->getName());
    }

    public function testWinningConditions(): void
    {
        $rock = new Rock();
        $scissors = new Scissors();
        $paper = new Paper();
        $spock = new Spock();
        $lizard = new Lizard();

        $this->assertTrue(true === $rock->wins($scissors));
        $this->assertTrue(true === $rock->wins($lizard));
        $this->assertNotTrue(true === $rock->wins($spock));
        $this->assertNotTrue(true === $rock->wins($paper));
    }

}

