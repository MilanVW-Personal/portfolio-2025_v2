<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ErvaringController;
use App\Http\Controllers\ProjectController;
use App\Models\Ervaring;
use App\Models\Education;
use App\Models\Project;
use App\Models\LearnedSkill as LearnedSkill;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $experiences = Ervaring::all()->sortByDesc("start");
    $opleidingen = Education::all()->sortByDesc("start");
    $allProjects = Project::all()->sortByDesc("end");
    $aangeleerdeSkills = LearnedSkill::all();
    return view('landing', ["ervaringen" => $experiences, "opleidingen" => $opleidingen, "projecten" => $allProjects, "aangeleerdeSkills" => $aangeleerdeSkills]);
});

// Route::get('/cv', function () {
    

//     return view('cv', [
//         "ervaringen" => $experiences->sortByDesc("start"),
//         "opleidingen" => $opleidingen
//     ]);
// });

// Route::get('/projects', function () {
   
//     return view('projects', ["projects" => $allProjects]);
// });

Route::get('/admin', function() {
    $projects = Project::all();
    $opleidingen = Education::all();
    $ervaringen = Ervaring::all();
    return view("/admin", [
        "opleidingen" => $opleidingen,
        "projecten" => $projects,
        "ervaringen" => $ervaringen,
    ]);
});

// Route om ingevulde code te kunnen checken
Route::post("/admin/login", function(Request $request) { 
    $ingevuldeCode = $request->input("code");
    $envCode = env('admin_panel_key');
    if ($ingevuldeCode == $envCode) {
        session(["admin_ingelogd" => true]);
        return back();
    }
    return back()->with("Error", "De toegangscode die je invulde was niet juist! Probeer het opnieuw");
});

Route::get("/contact", action: function() {
    return view("contact");
});

Route::get("/over-mij", function () {
    return view("over-mij");
});

Route::get("/privacy", function() {
    return view ("privacypolicy");
});

Route::get("/cookies", function() {
    return view ("cookiepolicy");
});



Route::post("/createNewProject", [ProjectController::class, "createNewProject"]);
Route::post("/createNewErvaring", [ErvaringController::class, "createNewErvaring"]);
Route::post("/createNewEducation", [EducationController::class, "createNewEducation"]);

Route::put('/editProject/{project}', [ProjectController::class, "editProject"]);
Route::put('/editErvaring/{ervaring}', [ErvaringController::class, "editErvaring"]);
Route::put('/editEducation/{education}', [EducationController::class, "editEducation"]);

Route::delete('/deleteErvaring/{ervaring}', [ErvaringController::class, "deleteErvaring"]);
Route::delete('/deleteEducation/{education}', [EducationController::class, "deleteEducation"]);
Route::delete('/deleteProject/{project}', [ProjectController::class, "deleteProject"]);