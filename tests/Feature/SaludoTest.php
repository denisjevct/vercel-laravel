<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaludoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_carga(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_contenido(): void
    {
        $view = $this->view('saludo');

        $view->assertSee('Juan');
    }
}
