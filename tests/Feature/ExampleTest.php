<?php

namespace Appbakkers\Ethereum\Tests\Feature;

use Appbakkers\Ethereum\Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function example()
    {
        dd(config());
        $this->assertTrue(true);
    }
}
