<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        "name"
    ];
    protected $table = 'goal';
    public $timestamps = false;

    use HasFactory;
}
