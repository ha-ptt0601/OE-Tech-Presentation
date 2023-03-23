<?php

namespace Example2\Resolve;

class NorwegianBlueBird extends Bird
{
    public function getSpeed()
    {
        return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
    }

    public function getBaseSpeed($voltage)
    {
        // do something
    }
}