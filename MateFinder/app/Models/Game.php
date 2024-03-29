<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        "name"
    ];
    protected $table = 'game';
    public $timestamps = false;

    use HasFactory;
}
