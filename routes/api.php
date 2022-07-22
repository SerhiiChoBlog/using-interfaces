<?php

use App\Http\Controllers\Api\SmsController;
use Illuminate\Support\Facades\Route;

Route::get('send-sms', [SmsController::class, 'sendSms']);