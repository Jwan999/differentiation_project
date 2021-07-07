<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return view('students.form');
    }

    public function store(Request $request)
    {
        $data = [
            'group_name' => $request->group_name,

            'student_1_name' => $request->student_1_name,
            'student_1_email' => $request->student_1_email,
            'student_1_number' => $request->student_1_number,
            'student_1_grade' => $request->student_1_grade,

            'student_2_name' => $request->student_2_name,
            'student_2_email' => $request->student_2_email,
            'student_2_number' => $request->student_2_number,
            'student_2_grade' => $request->student_2_grade,

            'student_3_name' => $request->student_3_name,
            'student_3_email' => $request->student_3_email,
            'student_3_number' => $request->student_3_number,
            'student_3_grade' => $request->student_3_grade,

            'student_4_name' => $request->student_4_name,
            'student_4_email' => $request->student_4_email,
            'student_4_number' => $request->student_4_number,
            'student_4_grade' => $request->student_4_grade,
        ];


        $group = Group::create($data);
        $projects = [];
        foreach ($request->projects as $index => $projectId) {
            $projects[$projectId] = [
                "order" => $index + 1
            ];
        }

        $group->projects()->sync($projects);
        return redirect('/',)->withSuccess('تم التسجيل بنجاح');
    }

}
