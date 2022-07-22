<?php

declare(strict_types=1);

namespace App\SmsServices;

use App\Exceptions\SmsServiceException;

interface SmsService
{
    /**
     * Send SMS message with given message content to a given phone number
     *
     * @param string $phone
     * @param string $message
     *
     * @throws SmsServiceException
     */
    public function sendMessage(string $phone, string $message): void;
}