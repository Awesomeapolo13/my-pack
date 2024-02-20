<?php

declare(strict_types=1);

use Faker\Factory;
use Faker\Generator;

class TextGenerator
{
    private Generator $generator;
    public function __construct()
    {
        $this->generator = Factory::create();
    }

    public function createText(int $charsNum): string
    {
        return $this->generator->text();
    }
}
