<?php

namespace Rps\Patterns;

class Lizard implements Pattern
{
    private string $name;

    public function __construct()
    {
        $this->name = 'Lizard';
    }

    public function getName(): string
    {
        return $this->name;
    }



    public function wins(Pattern $opponent): bool
    {
        if($opponent instanceof Spock || $opponent instanceof Paper) {
            return true;
        } else {
            return false;
        }
    }


}
