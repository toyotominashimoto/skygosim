<?php

namespace App\Console;

use App\Console\Commands\CreateAdminUserCommand;
use App\Console\Commands\DatabaseBackupCommand;
use App\Domains\InternetPackages\Commands\FetchInternetPackagesCommand;
use App\Domains\InternetPackages\Commands\FetchInternetPackagesFromApiCommand;
use App\Domains\InternetPackages\Commands\UpdateInternetPackagesFromFilePriceByApiCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        CreateAdminUserCommand::class,
        FetchInternetPackagesCommand::class,
        UpdateInternetPackagesFromFilePriceByApiCommand::class,
        FetchInternetPackagesFromApiCommand::class,
        DatabaseBackupCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
