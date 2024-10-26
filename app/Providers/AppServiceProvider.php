<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use TCG\Voyager\Facades\Voyager;

use App\Actions\WatchQuestions;
use App\Actions\WatchResultsUser;
use App\Actions\WatchResultsSubject;
use App\Actions\WatchResultsTopic;
use App\Actions\DownloadResultUser;
use App\Actions\DownloadResultSubject;
use App\Actions\DownloadResultTopic;
use App\Actions\ReviewTaskAnswer;

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


        //Voyager action buttons
        Voyager::addAction(WatchQuestions::class);

        //Watch results
        Voyager::addAction(WatchResultsUser::class);
        Voyager::addAction(WatchResultsSubject::class);
        Voyager::addAction(WatchResultsTopic::class);

        //Download results
        Voyager::addAction(DownloadResultUser::class);
        Voyager::addAction(DownloadResultSubject::class);
        Voyager::addAction(DownloadResultTopic::class);

        //Review task answer
        Voyager::addAction(ReviewTaskAnswer::class);
    }
}
