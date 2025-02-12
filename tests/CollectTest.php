<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase {

    public function testPop()
    {
        $collect = new Collect\Collect([123, 98, 5]);
        $collect->pop();
        $this->assertSame([123, 98], $collect->toArray());
    }
    public function testSplice()
    {
        $collect = new Collect\Collect(['a', 'b', 'c', 'd', 'e']);
        $collect->splice(1, 2);
        $this->assertSame(['a', 'd', 'e'], $collect->toArray());
    }
    public function testKeys()
    {
        $collect = new Collect\Collect(['qwe' => 1, 'asd' => 2]);
        $this->assertSame(['qwe', 'asd'], $collect->keys()->toArray());

    }
    public function testFirst()
    {
        $collect = new Collect\Collect(['qwe' => 1, 'asd' => 2]);
        $this->assertSame(1,  $collect->first());
    }
}
