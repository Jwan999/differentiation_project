<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function projectsPage()
    {
        $groups = Group::all();
        return view("projects.projects", ["groups" => $groups]);
    }

    public function index()
    {
        return view('projects.form');
    }

    public function store(Request $request)
    {
        $rules = $this->validate($request, [
            "name" => "required",
            "description" => "required",
        ]);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        Project::create($data);;

        return redirect('/teacher/marks',)->withSuccess('تم التسجيل بنجاح');
    }

}
