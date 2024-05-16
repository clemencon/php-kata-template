<?php


use Clemencon\Kata\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        static::assertEquals(expected: 'Hello!', actual: Example::greet());
    }
}
