<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searcher extends Model
{
    protected $fillable = [
        "username","profilelink","avatar","game_id","goal", "server", "gender",
        "last_online",
    ];

    protected $table = 'searchers';
    public $timestamps = false;
    use HasFactory;
}
