<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramApiTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:telegram-api-test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$response = Telegram::getMe();
        //$updates = Telegram::getUpdates();
        $s ='<b>今日入账（0笔）</b>'.
            '<p>2023-03-31 05:16:00</p>'.
            '<p>2023-03-31 05:16:00</p>';
        $response = Telegram::sendMessage([
            'chat_id' => '6950065715',
            'parse_mode' =>"HTML",
            'text' => $s
        ]);

        $messageId = $response->getMessageId();
        dd($messageId);
    }
}
