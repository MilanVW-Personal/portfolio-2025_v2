<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ervaring extends Model
{
    //
    protected $fillable = [
        "start",
        "end",
        "ervaringNaam",
        "ervaringDesc",
        "ervaringAdresGoogleMaps",
        "locatie",
    ];

    protected $casts = [
        "start" => "datetime",
        "end" => "datetime",
    ];
}
