<?php

namespace Problem1;
class Node
{
    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $field;

    /**
     * @var mixed
     */
    public $source;

    /**
     * compare method
     *
     * @return bool|void
     */
    public function compare()
    {
        switch ($this->operator) {
            case 'greater_than':
                return $this->field > $this->source;
            case 'less_than':
                return $this->field < $this->source;
            case 'equal_to':
                return $this->field == $this->source;
            case 'in':
                return in_array($this->field, $this->source);
            // Add more operators here
        }
    }
}