<?php

namespace Problem1\Resolve\Value;

use Problem1\Resolve\Node;

abstract class ValueNode extends Node
{
    /**
     * @var mixed
     */
    public $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     */
    abstract  public function evaluate();
}