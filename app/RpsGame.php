<?php

namespace Rps;


use Rps\Patterns\Paper;
use Rps\Patterns\Pattern;
use Rps\Patterns\PatternCollection;
use Rps\Patterns\Rock;
use Rps\Patterns\Scissors;
use Rps\Patterns\Spock;


class RpsGame
{
    private PatternCollection $possiblePatterns;
    private PatternCollection $combination;


    public function __construct()
    {
        $this->possiblePatterns = new PatternCollection();
        $this->possiblePatterns->addPattern(new Rock());
        $this->possiblePatterns->addPattern(new Paper());
        $this->possiblePatterns->addPattern(new Scissors());
    }


    public function getPossiblePatterns(): PatternCollection
    {
        return $this->possiblePatterns;
    }

    public function setCombination(Pattern $player, Pattern $pc): void
    {
        $this->combination = new PatternCollection();
        $this->combination->addPattern($player);
        $this->combination->addPattern($pc);
    }

    public function getCombination(): PatternCollection
    {
        return $this->combination;
    }


    public function tie(): bool
    {
        if ($this->combination->getPatterns()[0]->getName() === $this->combination->getPatterns()[1]->getName()){
            return true;
        }
        return false;
    }

    public function determineWinner(): string
    {
        $player = $this->combination->getPatterns()[0];
        $pc = $this->combination->getPatterns()[1];

        if($player->wins($pc) && !$this->tie()){
            return 'YOU';
        }
            return 'PC';

    }


}


