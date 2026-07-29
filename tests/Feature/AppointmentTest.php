<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_can_create_appointment(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get(route('client.dashboard'));
        $response->assertOk();
        $response->assertSee('Mis citas');
    }

    public function test_appointments_page_requires_auth(): void
    {
        $response = $this->get(route('client.dashboard'));
        $response->assertRedirect(route('login'));
    }
}
