<?php

namespace Tests;


use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\Pattern;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;

class PaperTest extends TestCase
{

    public function testImplementation(): void
    {
        $paper = new Paper();
        $this->assertInstanceOf(Pattern::class, $paper);
    }

    public function testName(): void
    {
        $paper = new Paper();
        $this->assertEquals('Paper', $paper->getName());
    }

    public function testWinningConditions(): void
    {
        $paper = new Paper();
        $rock = new Rock();
        $scissors = new Scissors();
        $spock = new Spock();
        $lizard = new Lizard();

        $this->assertTrue(true === $paper->wins($rock));
        $this->assertTrue(true === $paper->wins($spock));
        $this->assertNotTrue(true === $paper->wins($scissors));
        $this->assertNotTrue(true === $paper->wins($lizard));
    }

}
