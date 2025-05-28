<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearnedSkill extends Model
{
    //
    protected $fillable = [
        "skillNaam",
        "skillDesc",
        "icon",
        "class",
    ];
}
