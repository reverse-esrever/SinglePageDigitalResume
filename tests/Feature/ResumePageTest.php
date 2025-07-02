<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResumePageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_it_return_html_response(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200)
            ->assertViewHas('resume');
    }
}
