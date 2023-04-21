<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $fillable = [
        "name"
    ];
    protected $table = 'rank';
    public $timestamps = false;

    use HasFactory;
}
