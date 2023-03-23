<?php

namespace Resolve\Value;

use Resolve\Node;

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