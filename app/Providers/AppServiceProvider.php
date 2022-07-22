<?php

declare(strict_types=1);

namespace App\Providers;

use App\SmsServices\LoggerSmsService;
use App\SmsServices\SmsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(SmsService::class, LoggerSmsService::class);
    }
}
