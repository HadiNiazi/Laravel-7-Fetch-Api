<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    public function testAboutPage()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('About us');

    }
}
