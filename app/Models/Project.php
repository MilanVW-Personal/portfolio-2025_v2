<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // $table->longText("projectName")->default("");
    // $table->dateTime("start")->default(now());
    // $table->dateTime("end")->default(now()->addDay());
    // $table->longText("shortDesc")->default("");
    // $table->longText("thumbnailImage")->default("");
    // $table->longText("link")->default("")->nullable();
    protected $fillable = [
        "projectName",
        "start",
        "end",
        "shortDesc",
        "thumbnailImage",
        "link"
    ];

    protected $casts = [
        "start" => "datetime",
        "end" => "datetime"
    ];
}
