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
            "newErvaringLocatie" => "nullable",
        ]);

        // dd($newProjectData);

        Ervaring::create([
            "start" => $newErvaringData["newErvaringStart"],
            "end" => $newErvaringData["newErvaringEnd"],
            "ervaringNaam" => $newErvaringData["newErvaringNaam"],
            "ervaringDesc" => $newErvaringData["newErvaringDesc"],
            "ervaringAdresGoogleMaps" => $newErvaringData["newErvaringAdres"] == "" ? null : $newErvaringData["newErvaringAdres"],
            "locatie" => $newErvaringData["newErvaringLocatie"] == "" ? null : $newErvaringData["newErvaringLocatie"],
        ]);

        return redirect()->back()->with("success", "Ervaring toegevoegd!");
    }
    
    public function deleteErvaring(Ervaring $ervaring)
    {
        $ervaring->delete();
        return redirect()->back()->with("success", "Ervaring verwijderd!");
    }

    public function editErvaring(Request $request, Ervaring $ervaring) {
        $editedErvaringData = $request->validate([
            "editedErvaringNaam" => "required|min:1|max:100",
            "editedErvaringDesc" => "required|min:1|max:2000",
            "editedErvaringStart" => "required|date_format:Y-m-d\TH:i",
            "editedErvaringEnd" => "required|date_format:Y-m-d\TH:i",
            "editedErvaringAdres" => "nullable",
            "editedErvaringLocatie" => "nullable",
        ]);

        $ervaring->update([
            "start" => $editedErvaringData["editedErvaringStart"],
            "end" => $editedErvaringData["editedErvaringEnd"],
            "ervaringNaam" => $editedErvaringData["editedErvaringNaam"],
            "ervaringDesc" => $editedErvaringData["editedErvaringDesc"],
            "ervaringAdresGoogleMaps" => $editedErvaringData["editedErvaringAdres"] == "" ? null : $editedErvaringData["editedErvaringAdres"],
            "locatie" => $editedErvaringData["editedErvaringLocatie"] == "" ? null : $editedErvaringData["editedErvaringLocatie"],
        ]);

        $ervaring->save();

        return redirect()->back()->with("success", "Ervaring aangepast!");
    }

}
