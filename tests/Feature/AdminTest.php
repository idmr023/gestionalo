<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_cannot_access_without_auth(): void
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertRedirect(route('login'));
    }

    public function test_non_admin_cannot_access_admin(): void
    {
        $user = User::factory()->create(['role' => 'client']);

        $response = $this->actingAs($user)->get(route('admin.dashboard'));

        $response->assertForbidden();
    }

    public function test_admin_dashboard_loads(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));

        $response->assertOk();
    }

    public function test_admin_can_list_services(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        Service::factory()->create(['title' => 'Test Service']);

        $response = $this->actingAs($admin)->get(route('admin.services.index'));

        $response->assertOk();
        $response->assertSee('Test Service');
    }

    public function test_admin_can_list_projects(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        Project::factory()->create(['title' => 'Test Project']);

        $response = $this->actingAs($admin)->get(route('admin.projects.index'));

        $response->assertOk();
        $response->assertSee('Test Project');
    }

    public function test_admin_can_list_posts(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        Post::factory()->create(['title' => 'Test Post']);

        $response = $this->actingAs($admin)->get(route('admin.posts.index'));

        $response->assertOk();
        $response->assertSee('Test Post');
    }

    public function test_admin_can_list_categories(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->get(route('admin.blog.categories.index'));

        $response->assertOk();
    }

    public function test_admin_can_list_appointments(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create();
        Appointment::create([
            'user_id' => $user->id,
            'title' => 'Test Appointment',
            'scheduled_at' => now()->addDay(),
        ]);

        $response = $this->actingAs($admin)->get(route('admin.appointments'));

        $response->assertOk();
        $response->assertSee('Test Appointment');
    }

    public function test_admin_can_list_contacts(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        Contact::create([
            'name' => 'Test Contact',
            'email' => 'test@example.com',
            'message' => 'Test message',
        ]);

        $response = $this->actingAs($admin)->get(route('admin.contacts'));

        $response->assertOk();
        $response->assertSee('Test Contact');
    }

    public function test_admin_can_list_users(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        User::factory()->create(['name' => 'Test User']);

        $response = $this->actingAs($admin)->get(route('admin.users'));

        $response->assertOk();
        $response->assertSee('Test User');
    }

    public function test_client_dashboard_loads(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('client.dashboard'));

        $response->assertOk();
    }

    public function test_admin_header_no_admin_link(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->get(route('home'));

        $response->assertOk();
        $response->assertDontSee('>Admin</a>');
    }
}
