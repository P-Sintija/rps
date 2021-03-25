<?php
namespace Tests;


use PHPUnit\Framework\TestCase;
use Rps\Patterns\Paper;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;

class PaperTest extends TestCase
{
    public function testName(): void
    {
        $rock = new Paper();
        $this->assertEquals('Paper', $rock->getName());
    }

    public function testWinnerConditions(): void
    {
        $paper = new Paper();
        $rock = new Rock();
        $scissors = new Scissors();

        $this->assertTrue(true === $paper->wins($rock));
        $this->assertNotTrue(true === $paper->wins($scissors));
    }

}
