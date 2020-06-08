<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use App\Users;
use App\Game;
use App\Qiuz;

use Illuminate\Support\Facades\Log;

class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

dd('dsf');
// Log::write('info', '22222222222222222222222!');
// Log::write('info', $request);
      $user = Users::where('user_id', $request['message']['from']['id'])->first();

      if(!isset($user)) {
      $users = new Users;
      $users->user_id = $request['message']['from']['id'];
      $users->login = $request['message']['from']['username'];
      $users->save();
      }


      $telegram = new Api('1206501517:AAESCISLN5_hOhj2T6T5kutetW7gEHvsg20');

      $game = Game::where('chat_id', $request['message']['from']['id'])
      ->where('active', 1)
      ->first();

      $quiuz = Qiuz::inRandomOrder()
      ->where('active', 1)
      ->get();





      if(isset($game)) {
        $max_rounds = $game->max_rounds;



        for ($i=1; $i < $max_rounds; $i++) {

          $game->this_round = $i;
          $game->save();

          $q = $quiuz[$i];
          $quest = $q->question;
          $answer = $q->answer;






          $telegram->sendMessage([
          'chat_id' =>  $request['message']['from']['id'],
          'text' => $quest,
          ]);
       //   sleep(1);
          // $telegram->sendMessage([
          // 'chat_id' =>  $request['message']['from']['id'],
          // 'text' => $answer,
          // ]);


          if ($request['message']['text'] == $answer) {
            $telegram->sendMessage([
            'chat_id' =>  $request['message']['from']['id'],
            'text' => 'Правильно!',
            ]);

          }





         // sleep(100);

        }


      }





       if($request['message']['text'] == '10 раундов' or $request['message']['text'] == '20 раундов' or $request['message']['text'] == '40 раундов') {

         try {
         $round = explode(' ', $request['message']['text']);


         $game->max_rounds = $round[0];
         $game->this_round = 0;
         $game->save();


         // $response = $telegram->sendMessage([
         // 'chat_id' => '738880639',
         // 'text' => $round[0]
         // ]);


       } catch (\Exception $e) {
         $telegram->sendMessage([
         'chat_id' => '738880639',
         'text' => $e,
          ]);
       }







        //  $max_rounds = $game->max_rounds;
        //
        //
        //
        //  for ($i=1; $i < $max_rounds; $i++) {
        //
        //    $game->this_round = $i;
        //    $game->save();
        //
        //    $q = $quiuz[$i];
        //    $quest = $q->question;
        //    $answer = $q->answer;
        //
        //
        //
        //
        //
        //
        //    $telegram->sendMessage([
        //    'chat_id' =>  $request['message']['from']['id'],
        //    'text' => $quest,
        //    ]);
        // //   sleep(1);
        //    $telegram->sendMessage([
        //    'chat_id' =>  $request['message']['from']['id'],
        //    'text' => $answer,
        //    ]);
        //
        //
        // //   sleep(10);
        //
        //
        //
        //
        //
        //   // sleep(100);
        //
        //  }

       }


///start



      if ($request['message']['text'] == '/start') {
        $game = Game::where('chat_id', $request['message']['from']['id'])
        ->where('active', 1)->first();





        if (!isset($game)) {
          $game = new Game;
          $game->chat_id = $request['message']['from']['id'];
          $game->active = 1;
          $game->save();

          $keyboard = [
        ['10 раундов', '20 раундов', '40 раундов'],
         ];
           $reply_markup = $telegram->replyKeyboardMarkup([
           'keyboard' => $keyboard,
           'resize_keyboard' => true,
           'one_time_keyboard' => true
           ]);

          $telegram->sendMessage([
          'chat_id' =>  $request['message']['from']['id'],
          'text' => 'Выберите продолжительность игры',
          'reply_markup' => $reply_markup

          ]);
        } else {
          $telegram->sendMessage([
          'chat_id' => '738880639',
          'text' => 'Игра уже в процессе',


          ]);
        }
      }

      ///////////////

        if ($request['message']['text'] == '/starts') {


        }




      // $messageId = $response->getMessageId();




      dd($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function game()
    {
       sleep(20);
        $telegram = new Api('1206501517:AAESCISLN5_hOhj2T6T5kutetW7gEHvsg20');

      //  $game = Game::where('chat_id', $chat)->first();
        $quiuz = Qiuz::inRandomOrder()
        //->where('active', 1)
        ->get();

        dd($quiuz[1]);



        $max_rounds = $game->max_rounds;

        for ($i=1; $i = $max_rounds; $i++) {
          $game->this_round = $i;
          $game->save();

          $telegram->sendMessage([
          'chat_id' =>  $chat,
          'text' => $quiuz->question,


          ]);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
