<?php

declare(strict_types=1);

namespace App\SmsServices;

class LoggerSmsService implements SmsService
{
    public function sendMessage(string $phone, string $message): void
    {
        logger()->debug($message, ['from' => config('services.twilio.number')]);
    }
}
