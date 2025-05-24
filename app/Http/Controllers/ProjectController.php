<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function createNewProject(Request $request) {
        $newProjectData = $request->validate([
            "newProjectName" => "required|min:1|max:100",
            "newProjectStart" => "required|date_format:Y-m-d\TH:i",
            "newProjectEnd" => "required|date_format:Y-m-d\TH:i",
            "newProjectDesc" => "required|min:1|max:500",
            "newProjectThumbnailImage" => "image|mimes:jpg,png,jpeg,webp",
            "newProjectLink" => "nullable"
        ]);

        // dd($newProjectData);

        Project::create([
            "projectName" => $newProjectData["newProjectName"],
            "start" =>  $newProjectData["newProjectStart"],
            "end" => $newProjectData["newProjectEnd"],
            "shortDesc" => $newProjectData["newProjectDesc"],
            "thumbnailImage" => $this->saveImageToFolder($newProjectData["newProjectThumbnailImage"]),
            "link" => $newProjectData["newProjectLink"] == null ? "/" : $newProjectData["newProjectLink"],
        ]);

        return redirect()->back()->with("success", "Project toegevoegd!");
    }

    private function saveImageToFolder(UploadedFile $uploadedFile, $dest = "assets/imgs/projects") {
        if ($uploadedFile) {
            $name = $uploadedFile->getClientOriginalName();
            if (file_exists(public_path($dest))) {
                $uploadedFile->move(public_path($dest), $name);
            }

            return $dest . '/'. $name;
        }
        else {
            return redirect()->back()->withErrors("msg", "Je geüploadde foto is ongeldig en kon niet geüpload worden.");
        }
    }

    public function deleteProject(Project $project)
    {
        unlink($project->thumbnailImage);
        $project->delete();
        return redirect()->back()->with("success", "Project verwijderd!");
    }
}
