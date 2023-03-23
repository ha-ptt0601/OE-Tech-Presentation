<?php

namespace Example2\Resolve;

abstract class Bird
{
    public $type;

    public $numberOfCoconuts;

    public $isNailed;

    public $voltage;

    abstract function getSpeed();
}