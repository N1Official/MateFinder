<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    protected $fillable = [
        "game_id", "category_id"
    ];

    protected $table = 'game_category';
    public $timestamps = false;

    use HasFactory;
}
