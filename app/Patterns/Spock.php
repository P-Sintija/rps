<?php

namespace Rps\Patterns;

class Spock implements Pattern
{
    private string $name;

    public function __construct()
    {
        $this->name = 'Spock';
    }

    public function getName(): string
    {
        return $this->name;
    }



    public function wins(Pattern $opponent): bool
    {
        if($opponent instanceof Scissors || $opponent instanceof Rock) {
            return true;
        } else {
            return false;
        }
    }


}

