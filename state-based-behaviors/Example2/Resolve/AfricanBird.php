<?php

namespace Example2\Resolve;

class AfricanBird extends Bird
{
    function getSpeed()
    {
        return $this->getBaseSpeed() - $this->getLoadFactor() * $this->getNumberOfCoconuts();
    }

    public function getBaseSpeed()
    {
        // do something
    }

    public function getLoadFactor()
    {
        // do something
    }

    public function getNumberOfCoconuts()
    {
        // do something
    }
}