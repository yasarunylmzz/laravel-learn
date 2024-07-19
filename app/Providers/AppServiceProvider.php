<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use App\Policies\JobPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Model::preventLazyLoading();

       /* Gate::define('edit-job',function (User $user,Job $job){

            if ($job->employer->user === null) {
                return false;
            }

            return $job->employer->user->is($user);
        });*/

    }
}
