<?php

namespace Resolve;

class MyClass2 extends MyBaseClass
{
    protected function checkCondition() {
        return $this->val < 0;
    }

    protected function doSomething() {
        parent::doSomething();
        // Additional action for MyClass2
    }
}