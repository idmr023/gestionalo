<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class FrontController extends Controller
{
    public function index()
    {
        $services = Cache::remember('home.services', 3600, fn () => Service::active()->ordered()->get()
        );

        $projects = Cache::remember('home.projects', 3600, fn () => Project::active()->ordered()->get()
        );

        return view('pages.index', compact('services', 'projects'));
    }

    public function services()
    {
        $services = Cache::remember('services.all', 3600, fn () => Service::active()->ordered()->get());

        return view('pages.servicios', compact('services'));
    }

    public function projects()
    {
        $projects = Cache::remember('projects.all', 3600, fn () => Project::active()->ordered()->get()
        );

        return view('pages.proyectos', compact('projects'));
    }

    public function project(Project $project)
    {
        return view('pages.project', compact('project'));
    }

    public function blog()
    {
        $posts = Post::with('categories')->published()->recent()->paginate(9);
        $categories = Category::all();

        return view('pages.blog', compact('posts', 'categories'));
    }

    public function blogByCategory(Category $category)
    {
        $posts = $category->posts()->with('categories')->published()->recent()->paginate(9);
        $categories = Category::all();

        return view('pages.blog', compact('posts', 'categories', 'category'));
    }

    public function post(Post $post)
    {
        return view('pages.post', compact('post'));
    }

    public function contact()
    {
        return view('pages.contacto');
    }

    public function sendContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20|regex:/^[\+\d\s\(\)\-]{7,20}$/',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')->with('message', 'Mensaje enviado correctamente. Te contactaremos pronto.');
    }

    public function bookAppointment(): View
    {
        return view('pages.citas');
    }

    public function terms()
    {
        return view('pages.terminos');
    }

    public function privacy()
    {
        return view('pages.privacidad');
    }

    public function search()
    {
        return view('pages.buscar');
    }
}
