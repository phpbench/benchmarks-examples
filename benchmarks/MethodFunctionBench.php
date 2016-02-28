<?php

class MethodFunctionBench
{
    private $foo;

    public function __construct()
    {
        $this->foo = new Foo();
    }

    public function benchMethod()
    {
        $this->foo->method();
    }

    public function benchStaticMethod()
    {
        Foo::staticMethod();
    }

    public function benchFunction()
    {
        foo();
    }
}

function foo()
{
}

class Foo
{
    public function method()
    {
    }

    public static function staticMethod()
    {
    }
}
