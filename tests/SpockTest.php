<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\Pattern;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;

class SpockTest extends TestCase
{

    public function testImplementation(): void
    {
        $spock = new Spock();
        $this->assertInstanceOf(Pattern::class, $spock);
    }

    public function testName(): void
    {
        $spock = new Spock();
        $this->assertEquals('Spock', $spock->getName());
    }

    public function testWinningConditions(): void
    {
        $spock = new Spock();
        $rock = new Rock();
        $scissors = new Scissors();
        $paper = new Paper();
        $lizard = new Lizard();

        $this->assertTrue(true === $spock->wins($scissors));
        $this->assertTrue(true === $spock->wins($rock));
        $this->assertNotTrue(true === $spock->wins($paper));
        $this->assertNotTrue(true === $spock->wins($lizard));
    }

}
