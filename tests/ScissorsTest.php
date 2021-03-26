<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\Pattern;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;

class ScissorsTest extends TestCase
{

    public function testImplementation(): void
    {
        $scissors = new Scissors();
        $this->assertInstanceOf(Pattern::class, $scissors);
    }


    public function testName(): void
    {
        $scissors = new Scissors();
        $this->assertEquals('Scissors', $scissors->getName());
    }

    public function testWinningConditions(): void
    {
        $scissors = new Scissors();
        $rock = new Rock();
        $paper = new Paper();
        $spock = new Spock();
        $lizard = new Lizard();

        $this->assertTrue(true === $scissors->wins($paper));
        $this->assertTrue(true === $scissors->wins($lizard));
        $this->assertNotTrue(true === $scissors->wins($spock));
        $this->assertNotTrue(true === $scissors->wins($rock));
    }

}
