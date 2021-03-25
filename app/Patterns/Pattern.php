<?php

namespace Rps\Patterns;

interface Pattern
{
    public function getName(): string;
    public function wins(Pattern $opponent): bool;

}