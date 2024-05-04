<?php

require_once 'vendor/autoload.php';

use Telegram\Bot\Api;

// تعيين رمز الوصول الخاص بالبوت
$telegram = new Api('5872831544:AAFLrtuOSBtCKMb6Teno1wguBBeLLau9Yas');

// استقبال البيانات من تليجرام
$updates = $telegram->getWebhookUpdates();

// الرد على الرسائل الواردة
if ($updates->getMessage()->getText() == '/start') {
    $chat_id = $updates->getMessage()->getChat()->getId();
    $response = "مرحبًا بك! شكراً لاستخدام البوت.";
    $telegram->sendMessage([
        'chat_id' => $chat_id,
        'text' => $response
    ]);
}
