<?php

namespace Example2;

use Exception;

class Bird
{
    const EUROPEAN = 'european';
    const AFRICAN = 'african';
    const NORWEGIAN_BLUE = 'norwegian_blue';

    public $type;

    public $numberOfCoconuts;

    public $isNailed;

    public $voltage;

    public function getSpeed()
    {
        switch ($this->type) {
            case self::EUROPEAN:
                return $this->getBaseSpeed();
                case self::AFRICAN:
                return $this->getBaseSpeed() - $this->getLoadFactor() * $this->getNumberOfCoconuts();
                case self::NORWEGIAN_BLUE:
                return $this->isNailed() ? 0 : $this->getBaseSpeed($this->getVoltage());
        }

        throw new Exception("Should be unreachable");
    }
}