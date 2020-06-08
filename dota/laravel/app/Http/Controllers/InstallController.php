<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroes;
use App\Matches;
use App\Position;
use App\results;

class InstallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  //     $url = 'https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/v1?match_id=5449275060&key=13A92D1D3AB7EEA148567DC24892FC25';
  //
  //     $ch = curl_init();
  //
  //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  //     curl_setopt($ch, CURLOPT_URL, $url);
  //
  //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //
  //     curl_setopt($ch, CURLOPT_HTTPGET, 1);
  //
  //
  //     $output = curl_exec($ch);
  //
  //     curl_close($ch);
  //     $answer = json_decode($output, true);
  // //    dd($answer);
  //     dd($answer);

        //
        // $url = 'https://api.opendota.com/api/heroes';
        //
        // $ch = curl_init();
        //
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        // curl_setopt($ch, CURLOPT_URL, $url);
        //
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        // curl_setopt($ch, CURLOPT_HTTPGET, 1);
        //
        //
        // $output = curl_exec($ch);
        //
        // curl_close($ch);
        // $answer = json_decode($output, true);
        //
        //
        //
        // foreach ($answer as $key) {
        //
        //   $hero = new Heroes;
        //   $hero->name = $key['localized_name'];
        //   $hero->hero_id = $key['id'];
        //   $hero->save();
        // }
        //


        //
        // $teamA = [21,23,16,39,34];
        // $teamB = [43,55,70,25,5];
        // // $url = 'https://api.opendota.com/api/findMatches?teamA='.$teamA.'&teamB='.$teamB;
        // $url = 'https://api.opendota.com/api/findMatches?teamA=[21,23,16,39,34]&teamB=[43,55,70,25,5]';
        //
        // $ch = curl_init();
        //
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        // curl_setopt($ch, CURLOPT_URL, $url);
        //
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        // curl_setopt($ch, CURLOPT_HTTPGET, 1);
        //
        //
        // $output = curl_exec($ch);
        //
        // curl_close($ch);
        // $answer = json_decode($output, true);
        // dd($answer);



        // foreach ($answer as $key) {
        //
        //   $hero = new Heroes;
        //   $hero->name = $key['localized_name'];
        //   $hero->save();
        // }

        $position = new Position;
        $teamA = [21,23,16,40,35];

        $teamB = [43,55,70,25,5];
        $last = Position::latest('id')->value('position');
        //dd($last);
        // $url = 'https://api.opendota.com/api/findMatches?teamA='.$teamA.'&teamB='.$teamB;
        for ($i=$last; $i < 99999999999; $i++) {
        $position->position = $i;
        $position->save();


        $url = 'https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/v1?match_id='.$i.'&key=13A92D1D3AB7EEA148567DC24892FC25';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPGET, 1);


        $output = curl_exec($ch);

        curl_close($ch);
        $answer = json_decode($output, true);
    //   dd($answer);
  //    dd($answer['result']['picks_bans']);
      //  dd($output);

    //    dd($answer['picks_bans']);

        $some = [];
        if (!isset($answer['result']['error'])) {
          //dd('d');
//$answer['skill'] == 1 and
        if ( isset($answer['result']['picks_bans']) and $answer['result']['picks_bans'] != null) {
          if ( isset($answer['result']['picks_bans'])) {
        foreach ($answer['result']['picks_bans'] as $key) {
          if ($key['is_pick'] == true) {
            if (in_array($key['hero_id'], $teamA) and $key['team'] == 0) {
              $some[] = $key['hero_id'];
            }
          }
        }


        //dd($some);
        $heroes = [];
        foreach ($some as $hero) {
        //  dump($hero);
          $heroes[] = Heroes::where('hero_id', $hero)->value('name');
        }
        //dd($heroes);
        $results = new results;
        $results->match_id = $i;

        $results->teamA = implode(',', $heroes);
        $results->teamB = implode(',', $heroes);
        $results->save();
        if(count($heroes) == 5) {
        dd(count($heroes));
      }
    }
    }
    else {
      foreach ($answer['result']['players'] as $key) {
          $some[] = $key['hero_id'];
      }


      //dd($some);
      $heroes = [];
      foreach ($some as $hero) {
      //  dump($hero);
        $heroes[] = Heroes::where('hero_id', $hero)->value('name');
      }
      //dd($heroes);
      $results = new results;
      $results->match_id = $i;

      $results->teamA = implode(',', $heroes);
      $results->teamB = implode(',', $heroes);
      $results->save();
      if(count($heroes) == 5) {
      dd(count($heroes));
    }

    }
  }
  // else {
  //
  // //  $i = $i - 1;
  //   // $position->position = $i;
  //   // $position->save();
  //
  //   // $results = new results;
  //   // $results->match_id = $i;
  //   // $results->teamA = $answer['error'];
  //   // $results->teamB =  $answer['error'];
  //   // $results->save();
  // }

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
