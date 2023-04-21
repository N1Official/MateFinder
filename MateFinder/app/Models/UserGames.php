<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGames extends Model
{
    protected $fillable = [
        "user_id","game_id","goal_id","rank_id", "level"
    ];
    protected $table = 'user_games';
    public $timestamps = false;

    use HasFactory;
}
