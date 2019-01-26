<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

// listen for an Alexa Skill Intent Name
$botman->hears('SearchConferences', function ($bot) {
    $bot->reply('These are your upcoming conferences: Laracon 2019, RailsConf 2019');
});
