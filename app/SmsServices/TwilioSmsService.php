<?php

declare(strict_types=1);

namespace App\SmsServices;

use App\Exceptions\SmsServiceException;
use Throwable;
use Twilio\Rest\Client;

class TwilioSmsService
{
    public function sendMessage(string $phone, string $message): void
    {
        $sid = config('services.twilio.sid');
        $token = config('services.twilio.token');

        if (!$sid || !$token) {
            throw new SmsServiceException('Check if you have correct configurations for twilio service');
        }

        try {
            $twilio = new Client($sid, $token);

            $twilio->messages->create($phone, [
                'from' => config('services.twilio.number'),
                'body' => $message,
            ]);
        } catch (Throwable $e) {
            throw new SmsServiceException($e->getMessage());
        }
    }
}