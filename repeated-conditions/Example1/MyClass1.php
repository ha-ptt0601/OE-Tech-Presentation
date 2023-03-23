<?php

class MyClass1
{
    protected $val;

    public function myMethod()
    {
        if ($this->checkCondition()) {
            $this->doSomething();
        }
    }

    private function checkCondition()
    {
        return $this->val < 0;
    }
}