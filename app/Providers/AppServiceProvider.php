<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Enable custom action for publish posts
                    Voyager::addAction(\TCG\Voyager\Actions\ApproveAction::class);
                  Voyager::addAction(\TCG\Voyager\Actions\PublishAction::class);
                  Voyager::addAction(\TCG\Voyager\Actions\UserAction::class);
                    Voyager::addAction(\TCG\Voyager\Actions\RequestAction::class);
//             Voyager::addAction(\TCG\Voyager\Actions\AddProductAction::class);

    }
}
