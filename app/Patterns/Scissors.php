<?php

namespace Rps\Patterns;

class Scissors implements Pattern
{
    private string $name;

    public function __construct()
    {
        $this->name = 'Scissors';
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function wins(Pattern $opponent): bool
    {
        if($opponent instanceof Paper) {
            return true;
        } else {
            return false;
        }
    }


}
