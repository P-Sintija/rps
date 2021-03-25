<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Paper;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\RpsGame;


class RpsGameTest extends TestCase
{
    public function testPossiblePatterns(): void
    {
        $game = new RpsGame();
        $possiblePatterns = $game->getPossiblePatterns()->getPatterns();

        $this->assertGreaterThanOrEqual(2, count($possiblePatterns));
        // ->assertGreaterThanOrEqual - izpilda 2 testus vienlaicīgi;
    }

    public function testCountCombination(): void
    {
        $game = new RpsGame();
        $game->setCombination(new Rock(), new Paper());

        $this->assertCount(2, $game->getCombination()->getPatterns());
    }

    public function testTie(): void
    {
        $game = new RpsGame();
        $game->setCombination(new Scissors(), new Scissors());
        $player = $game->getCombination()->getPatterns()[0]->getname();
        $opponent = $game->getCombination()->getPatterns()[1]->getName();

        $this->assertTrue($player === $opponent);
    }


}





