<?php

namespace Surok\ComposerPackage\App;

use Random\Randomizer;

class Calculator
{
    private Randomizer $randomizer;
    public function __construct()
    {
        $this->randomizer = new Randomizer();
    }

    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function getRandomFloat(float $min, float $max): float
    {
        return $this->randomizer->getFloat($min, $max);
    }
}