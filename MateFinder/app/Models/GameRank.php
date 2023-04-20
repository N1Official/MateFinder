<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameRank extends Model
{
    protected $fillable = [
        "rank_id", "game_id", "order"
    ];


    protected $table = 'game_rank';
    public $timestamps = false;

    use HasFactory;
}
