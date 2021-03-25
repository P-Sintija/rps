<?php
namespace Rps\Patterns;

class Paper implements Pattern
{
    private string $name;

    public function __construct()
    {
        $this->name = 'Paper';
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function wins(Pattern $opponent): bool
    {
        if($opponent instanceof Rock) {
            return true;
        } else {
            return false;
        }
    }


}