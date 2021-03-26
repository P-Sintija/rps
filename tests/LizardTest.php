<?php

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\Pattern;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;

class LizardTest extends TestCase
{

    public function testImplementation(): void
    {
        $lizard = new Lizard();
        $this->assertInstanceOf(Pattern::class, $lizard);
    }

    public function testName(): void
    {
        $lizard = new Lizard();
        $this->assertEquals('Lizard', $lizard->getName());
    }

    public function testWinningConditions(): void
    {
        $rock = new Rock();
        $scissors = new Scissors();
        $paper = new Paper();
        $spock = new Spock();
        $lizard = new Lizard();

        $this->assertTrue(true === $lizard->wins($spock));
        $this->assertTrue(true === $lizard->wins($paper));
        $this->assertNotTrue(true === $lizard->wins($scissors));
        $this->assertNotTrue(true === $lizard->wins($rock));
    }

}
