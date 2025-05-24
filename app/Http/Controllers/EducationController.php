<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
      public function createNewEducation(Request $request) {
        $newOpleidingData = $request->validate([
            "newOpleidingStart" => "required|date_format:Y-m-d\TH:i",
            "newOpleidingEnd" => "required|date_format:Y-m-d\TH:i",
            "newOpleidingDesc" => "required|min:1|max:2000",
            "newOpleidingCampus" => "required|min:1|max:2000",
            "newOpleidingLocation" => "nullable",
        ]);

        // dd($newProjectData);

        Education::create([
            "start" => $newOpleidingData["newOpleidingStart"],
            "end" => $newOpleidingData["newOpleidingEnd"],
            "campus" => $newOpleidingData["newOpleidingCampus"],
            "location" => $newOpleidingData["newOpleidingLocation"] == "" ? null : $newOpleidingData["newOpleidingLocation"],
            "opleidingDesc" => $newOpleidingData["newOpleidingDesc"],
        ]);

        return redirect()->back()->with("success", "Opleiding toegevoegd!");
    }

    public function deleteOpleiding(Education $opleiding)
    {
        $opleiding->delete();
        return redirect()->back()->with("success", "Opleiding verwijderd!");
    }
}
