<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        "game_id", "name"
    ];
    protected $table = 'server';
    public $timestamps = false;

    use HasFactory;
}
