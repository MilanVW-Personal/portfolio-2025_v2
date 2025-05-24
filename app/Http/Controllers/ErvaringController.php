<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ervaring;
use Illuminate\Http\Request;

class ErvaringController extends Controller
{
    //
    public function createNewErvaring(Request $request) {
        $newErvaringData = $request->validate([
            "newErvaringNaam" => "required|min:1|max:100",
            "newErvaringDesc" => "required|min:1|max:2000",
            "newErvaringStart" => "required|date_format:Y-m-d\TH:i",
            "newErvaringEnd" => "required|date_format:Y-m-d\TH:i",
            "newErvaringAdres" => "nullable",
        ]);

        // dd($newProjectData);

        Ervaring::create([
            "start" => $newErvaringData["newErvaringStart"],
            "end" => $newErvaringData["newErvaringEnd"],
            "ervaringNaam" => $newErvaringData["newErvaringNaam"],
            "ervaringDesc" => $newErvaringData["newErvaringDesc"],
            "ervaringAdresGoogleMaps" => $newErvaringData["newErvaringAdres"] == "" ? null : $newErvaringData["newErvaringAdres"]
        ]);

        return redirect()->back()->with("success", "Ervaring toegevoegd!");
    }
    
    public function deleteErvaring(Ervaring $ervaring)
    {
        $ervaring->delete();
        return redirect()->back()->with("success", "Ervaring verwijderd!");
    }
}
