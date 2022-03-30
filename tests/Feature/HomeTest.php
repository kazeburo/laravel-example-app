<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Test home status code.
     *
     * @return void
     */
    public function testStatusCode()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    /**
     * Test home body.
     *
     * @return void
     */
    public function testBody()
    {
        $response = $this->get('/home');
        $response->assertSeeText("こんにちは！");
    }
}
