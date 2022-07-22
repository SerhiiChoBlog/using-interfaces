<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\SmsServices\TwilioSmsService;

class SmsController extends Controller
{
    public function sendSms(TwilioSmsService $service): void
    {
        $service->sendMessage('<your-phone>', 'Test message');
    }
}
