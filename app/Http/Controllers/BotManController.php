<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {

         $botman = app('botman');
         $botman->hears('{message}', function($botman, $message) {
         if ($message == 'hi')
          {
            $this->askName($botman);
          }
          else
          {
            $botman->reply("write 'hi' for testing...");
          }
       });

       $botman->listen();

    }

      /**
       * Place your BotMan logic here.
      */

      public function askName($botman)
      {

          $botman->ask('Hello! Thanks for ur text... How can I help you?', function(Answer $answer) {
          $name = $answer->getText();

          $this->say('Please contact to the given number for your queries :- 982629283. Thankyou!!!');
        });

      }
}
