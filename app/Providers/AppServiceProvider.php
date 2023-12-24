<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;

use App\Actions\WatchQuestions;
use App\Actions\WatchResultsUser;
use App\Actions\WatchResultsTopic;
use App\Actions\WatchResultsSubject;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            \URL::forceScheme('https');
        }

        Voyager::addAction(WatchQuestions::class);

        Voyager::addAction(WatchResultsUser::class);
        Voyager::addAction(WatchResultsSubject::class);
        Voyager::addAction(WatchResultsTopic::class);
    }
}
