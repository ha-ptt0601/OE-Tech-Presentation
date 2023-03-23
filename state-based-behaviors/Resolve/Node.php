<?php

namespace Resolve;

abstract class Node
{
    /**
     * Evaluate the node
     *
     * @return mixed
     */
    public abstract function evaluate();
}