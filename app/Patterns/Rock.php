<?php

namespace Rps\Patterns;

class Rock implements Pattern
{
    private string $name;

    public function __construct()
    {
        $this->name = 'Rock';
    }

    public function getName(): string
    {
        return $this->name;
    }



    public function wins(Pattern $opponent): bool
    {
        if($opponent instanceof Scissors || $opponent instanceof Lizard) {
            return true;
        } else {
            return false;
        }
    }


}

