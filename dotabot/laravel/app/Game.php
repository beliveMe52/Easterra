<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = ['active', 'chat_id', 'max_rounds', 'this_round', 'id'];
}
