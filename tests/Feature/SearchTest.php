<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function test_search_page_loads(): void
    {
        $response = $this->get(route('search'));

        $response->assertOk();
        $response->assertSee('Buscar');
    }
}
