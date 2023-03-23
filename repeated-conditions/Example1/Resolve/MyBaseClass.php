<?php

namespace Resolve;

abstract class MyBaseClass implements MyInterface
{
    protected $val;

    public function __construct($val) {
        $this->val = $val;
    }

    abstract protected function checkCondition();

    public function myMethod() {
        if ($this->checkCondition()) {
            $this->doSomething();
        }
    }

    protected function doSomething() {
        // Common action
    }
}