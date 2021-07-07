<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function marks()
    {
        $groups = Group::all();


        return view('teacher.marks', ["groups" => $groups]);
    }

    public function updateMarks(Request $request)
    {
        foreach ($request->group as $id => $marks) {
            $group = Group::find($id);
            for ($i = 1; $i < 5; $i++)
                $group->{"student_{$i}_grade"} = $marks[$i];
            $group->save();
        }

        return redirect('/teacher/marks',)->withSuccess('تم تحةيث الدرجات بنجاح');
    }

    public function differentiate()
    {
        $groups = Group::all();
        foreach ($groups as $group) {
            $group->project_id = null;
            $group->save();
        }
        $groups = $groups->sortByDesc("average");
        $taken = [];
        $assignedGroups = [];
        $results = [];
        foreach ($groups as $group) {
            foreach ($group->projects as $project) {
                $isTaken = in_array($project->id, $taken);
                $assigned = in_array($group->id, $assignedGroups);
                if (!$isTaken && !$assigned) {
                    $results[] = [
                        "group" => $group,
                        "project" => $project
                    ];
                    $assignedGroups[] = $group->id;
                    $taken[] = $project->id;
                    $group->project_id = $project->id;
                    $group->save();
                }
            }
        }
        $groups = Group::all();
        return view("projects.projects", ["groups" => $groups]);
    }
}
