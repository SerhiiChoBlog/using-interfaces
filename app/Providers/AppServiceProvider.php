<?php

declare(strict_types=1);

namespace App\Providers;

use App\SmsServices\SmsService;
use App\SmsServices\TwilioSmsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(SmsService::class, TwilioSmsService::class);
    }
}
