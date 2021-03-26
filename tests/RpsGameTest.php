<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rps\Patterns\Lizard;
use Rps\Patterns\Paper;
use Rps\Patterns\PatternCollection;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;
use Rps\RpsGame;


class RpsGameTest extends TestCase
{

    public function testPatternType(): void
    {
        $game = new RpsGame();
        $possiblePatterns = $game->getPossiblePatterns();
        $this->assertInstanceOf(PatternCollection::class, $possiblePatterns);
    }

    public function testPatternCount(): void
    {
        $game = new RpsGame();
        $possiblePatterns = $game->getPossiblePatterns()->getPatterns();

        $this->assertGreaterThanOrEqual(2, count($possiblePatterns));
    }

    public function testCombinationType(): void
    {
        $game = new RpsGame();
        $game->setCombination(new Rock(), new Paper());
        $this->assertInstanceOf(PatternCollection::class, $game->getCombination());
    }

    public function testCombinationCount(): void
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

    public function testYouWon(): void
    {
        $game = new RpsGame();

        $game->setCombination(new Rock(), new Scissors());
        $this->assertEquals('YOU', $game->determineWinner());

        $game->setCombination(new Rock(), new Lizard());
        $this->assertTrue('YOU' === $game->determineWinner());


        $game->setCombination(new Paper(), new Rock());
        $this->assertEquals('YOU', $game->determineWinner());

        $game->setCombination(new Paper(), new Spock());
        $this->assertEquals('YOU', $game->determineWinner());


        $game->setCombination(new Scissors(), new Paper());
        $this->assertEquals('YOU', $game->determineWinner());

        $game->setCombination(new Scissors(), new Lizard());
        $this->assertNotTrue('PC' === $game->determineWinner());


        $game->setCombination(new Spock(), new Rock());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Spock(), new Scissors());
        $this->assertEquals('YOU', $game->determineWinner());


        $game->setCombination(new Lizard(), new Paper());
        $this->assertNotTrue('PC' === $game->determineWinner());

        $game->setCombination(new Lizard(), new Spock());
        $this->assertEquals('YOU', $game->determineWinner());

    }

    public function testOpponentWon(): void
    {
        $game = new RpsGame();

        $game->setCombination(new Lizard(), new Rock());
        $this->assertTrue('PC' === $game->determineWinner());

        $game->setCombination(new Rock(), new Paper());
        $this->assertEquals('PC', $game->determineWinner());

        $game->setCombination(new Paper(), new Scissors());
        $this->assertNotTrue('YOU' === $game->determineWinner());

        $game->setCombination(new Scissors(), new Spock());
        $this->assertTrue('PC' === $game->determineWinner());

        $game->setCombination(new Spock(), new Lizard());
        $this->assertNotEquals('YOU', $game->determineWinner());
    }


}





