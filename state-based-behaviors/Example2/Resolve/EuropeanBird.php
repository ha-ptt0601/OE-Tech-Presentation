<?php

namespace Example2\Resolve;

class EuropeanBird extends Bird
{
    public function getSpeed()
    {
        return $this->getBaseSpeed();
    }

    public function getBaseSpeed()
    {
        // do something
    }
}