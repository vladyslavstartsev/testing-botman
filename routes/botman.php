<?php
use App\Http\Controllers\BotManController;
// Don't use the Facade in here to support the RTM API too :)
$botman = resolve('botman');

$botman->hears('test', function($bot){
    $bot->reply('hello!');
});

$botman->hears('foo', function ($bot) {
    $bot->reply('Hello World');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');