<?php

namespace Resolve;

class InOperatorNode extends OperatorNode
{
    /**
     * @inheritDoc
     */
    public function evaluate()
    {
        return in_array($this->field, $this->source);
    }
}