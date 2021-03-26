<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;
use Rps\RpsGame;


class RpsGameTest extends TestCase
{
    public function testPossiblePatterns(): void
    {
        $game = new RpsGame();
        $possiblePatterns = $game->getPossiblePatterns()->getPatterns();

        $this->assertGreaterThanOrEqual(2, count($possiblePatterns));
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

    public function testWinner(): void
    {
        $game = new RpsGame();

        $game->setCombination(new Rock(), new Scissors());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Rock(), new Lizard());
        $this->assertTrue('YOU' === $game->determineWinner());
        $this->assertNotEquals('PC', $game->determineWinner());


        $game->setCombination(new Paper(), new Rock());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Paper(), new Spock());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());


        $game->setCombination(new Scissors(), new Paper());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Scissors(), new Lizard());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());


        $game->setCombination(new Spock(), new Rock());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Spock(), new Scissors());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());


        $game->setCombination(new Lizard(), new Paper());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Lizard(), new Spock());
        $this->assertEquals('YOU', $game->determineWinner());
        $this->assertNotTrue('PC' === $game->determineWinner());


    }


}





