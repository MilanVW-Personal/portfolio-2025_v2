<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ErvaringController;
use App\Http\Controllers\ProjectController;
use App\Models\Ervaring;
use App\Models\Education;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cv', function () {
    $experiences = Ervaring::all();
    $opleidingen = Education::all()->sortByDesc("start");

    return view('cv', [
        "ervaringen" => $experiences->sortByDesc("start"),
        "opleidingen" => $opleidingen
    ]);
});

Route::get('/projects', function () {
    $allProjects = Project::all()->sortByDesc("end");;
    return view('projects', ["projects" => $allProjects]);
});

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

Route::get("/contact", action: function() {
    return view("contact");
});

Route::get("/over-mij", function () {
    return view("over-mij");
});



Route::post("/createNewProject", [ProjectController::class, "createNewProject"]);
Route::post("/createNewErvaring", [ErvaringController::class, "createNewErvaring"]);
Route::post("/createNewEducation", [EducationController::class, "createNewEducation"]);

Route::delete('/deleteProject/{project}', [ProjectController::class, "deleteProject"]);