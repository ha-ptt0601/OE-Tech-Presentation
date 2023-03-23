<?php

namespace Resolve;
abstract class OperatorNode extends Node
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var mixed
     */
    public $source;

    /**
     * @inheritDoc
     */
    abstract public function evaluate();
}