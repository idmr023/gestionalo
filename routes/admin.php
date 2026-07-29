<?php

use App\Livewire\Admin\AppointmentList;
use App\Livewire\Admin\Blog\CategoryForm;
use App\Livewire\Admin\Blog\CategoryList;
use App\Livewire\Admin\Blog\PostForm;
use App\Livewire\Admin\Blog\PostList;
use App\Livewire\Admin\ChangeHistory;
use App\Livewire\Admin\ContactList;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Projects\ProjectForm;
use App\Livewire\Admin\Projects\ProjectList;
use App\Livewire\Admin\Recycle\RecycleBin;
use App\Livewire\Admin\Services\ServiceForm;
use App\Livewire\Admin\Services\ServiceList;
use App\Livewire\Admin\UserList;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::get('/services', ServiceList::class)->name('services.index');
    Route::get('/services/create', ServiceForm::class)->name('services.create');
    Route::get('/services/{service}/edit', ServiceForm::class)->name('services.edit');

    Route::get('/projects', ProjectList::class)->name('projects.index');
    Route::get('/projects/create', ProjectForm::class)->name('projects.create');
    Route::get('/projects/{project}/edit', ProjectForm::class)->name('projects.edit');

    Route::get('/posts', PostList::class)->name('posts.index');
    Route::get('/posts/create', PostForm::class)->name('posts.create');
    Route::get('/posts/{post}/edit', PostForm::class)->name('posts.edit');

    Route::get('/blog/categories', CategoryList::class)->name('blog.categories.index');
    Route::get('/blog/categories/create', CategoryForm::class)->name('blog.categories.create');
    Route::get('/blog/categories/{category}/edit', CategoryForm::class)->name('blog.categories.edit');

    Route::get('/appointments', AppointmentList::class)->name('appointments');
    Route::get('/contacts', ContactList::class)->name('contacts');
    Route::get('/users', UserList::class)->name('users');

    Route::get('/recycle-bin', RecycleBin::class)->name('recycle-bin');
    Route::get('/history', ChangeHistory::class)->name('history');
});
