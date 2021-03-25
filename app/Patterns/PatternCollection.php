<?php

namespace Rps\Patterns;


class PatternCollection
{
    private array $patterns;


    public function addPattern(Pattern $pattern): void
    {
        $this->patterns[] = $pattern;
    }


    public function getPatterns(): array
    {
        return $this->patterns;
    }

}