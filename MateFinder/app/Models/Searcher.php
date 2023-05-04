<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searcher extends Model
{
    protected $fillable = [
        "username","profilelink","game_id","goal_id", "server_id", "gender_id",
        "last_online",
    ];

    protected $table = 'searchers';
    public $timestamps = false;
    use HasFactory;
}
