<?php

namespace Surok\ComposerPackage\App;

class Calculator
{
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }
}