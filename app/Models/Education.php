<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $fillable = [
        "start",
        "end",
        "campus",
        "location",
        "opleidingDesc"
    ];

    protected $casts = [
        "start" => "datetime",
        "end" => "datetime",
    ];
}
