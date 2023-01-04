<?php

namespace CyberPunkCodes\ExtendedCommands\Providers;

use Illuminate\Support\ServiceProvider;
use CyberPunkCodes\ExtendedCommands\Console\Commands\ClearLogs;
use CyberPunkCodes\ExtendedCommands\Console\Commands\MakeAction;
use CyberPunkCodes\ExtendedCommands\Console\Commands\MakeContract;
use CyberPunkCodes\ExtendedCommands\Console\Commands\MakeEnum;
use CyberPunkCodes\ExtendedCommands\Console\Commands\MakeService;
use CyberPunkCodes\ExtendedCommands\Console\Commands\MakeTrait;
use CyberPunkCodes\ExtendedCommands\Console\Commands\MakeView;

class ExtendedCommandsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ClearLogs::class,
                MakeAction::class,
                MakeContract::class,
                MakeEnum::class,
                MakeService::class,
                MakeTrait::class,
                MakeView::class,
            ]);
        }
    }
}
