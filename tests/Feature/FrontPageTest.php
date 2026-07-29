<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class FrontPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
    }

    public function test_projects_page_loads(): void
    {
        Cache::forget('home.projects');

        Project::factory()->create([
            'title' => 'Test Project',
            'is_active' => true,
            'sort_order' => 1,
        ]);

        $response = $this->get(route('projects.index'));

        $response->assertOk();
        $response->assertSee('Test Project');
    }

    public function test_blog_page_loads(): void
    {
        $response = $this->get(route('blog.index'));

        $response->assertOk();
        $response->assertSee('Blog');
    }

    public function test_blog_shows_published_posts(): void
    {
        Post::factory()->create([
            'title' => 'Published Post',
            'body' => 'Content',
            'is_published' => true,
            'published_at' => now(),
        ]);

        $response = $this->get(route('blog.index'));

        $response->assertSee('Published Post');
    }

    public function test_blog_hides_unpublished_posts(): void
    {
        Post::factory()->create([
            'title' => 'Draft Post',
            'body' => 'Content',
            'is_published' => false,
        ]);

        $response = $this->get(route('blog.index'));

        $response->assertDontSee('Draft Post');
    }

    public function test_contact_page_loads(): void
    {
        $response = $this->get(route('contact'));

        $response->assertOk();
        $response->assertSee('Hablemos');
    }

    public function test_contact_form_sends(): void
    {
        $response = $this->post(route('contact'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '999888777',
            'message' => 'Test message from John.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('message');
        $this->assertDatabaseHas('contacts', [
            'message' => 'Test message from John.',
        ]);
        $contact = Contact::where('message', 'Test message from John.')->first();
        $this->assertEquals('john@example.com', $contact->email);
        $this->assertEquals('999888777', $contact->phone);
    }

    public function test_terms_page_loads(): void
    {
        $response = $this->get(route('terms'));

        $response->assertOk();
        $response->assertSee('Términos y Condiciones');
    }

    public function test_privacy_page_loads(): void
    {
        $response = $this->get(route('privacy'));

        $response->assertOk();
        $response->assertSee('Política de Privacidad');
    }
}
