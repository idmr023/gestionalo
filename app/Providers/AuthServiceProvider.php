<?php

namespace App\Providers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use App\Policies\AppointmentPolicy;
use App\Policies\ContactPolicy;
use App\Policies\PostPolicy;
use App\Policies\ProjectPolicy;
use App\Policies\ServicePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Service::class => ServicePolicy::class,
        Project::class => ProjectPolicy::class,
        Post::class => PostPolicy::class,
        Contact::class => ContactPolicy::class,
        Appointment::class => AppointmentPolicy::class,
        User::class => UserPolicy::class,
    ];

    public function boot(): void
    {
        //
    }
}
