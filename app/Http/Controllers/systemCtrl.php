<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\lecturer;
use App\Models\project;
use App\Models\student;

class systemCtrl extends Controller
{
    // ***** CRUD functions *****
    public function createProject(Request $req){
        $newProject = new project;
        $newProject->project_title = $req->title;
        $newProject->project_type = $req->type;
        $newProject->project_start = $req->start;
        $newProject->project_end = $req->end;
        $newProject->project_duration = $req->duration;
        $newProject->student_id = $req->student_id;
        $newProject->sv_id = $req->sv_id;
        $newProject->ex1_id = $req->ex1_id;
        $newProject->ex2_id = $req->ex2_id;
        
        $newProject->save;

        echo $req->title;
        echo '<br/>';
        echo $req->type;
        echo '<br/>';
        echo $req->start;
        echo '<br/>';
        echo $req->end;
        echo '<br/>';
        echo $req->duration;
        echo '<br/>';
        echo $req->student_id;
        echo '<br/>';
        echo $req->sv_id;
        echo '<br/>';
        echo $req->ex1_id;
        echo '<br/>';
        echo $req->ex2_id;
        DB::insert("INSERT INTO `projects` (`project_title`, `project_type`, `project_start`, `project_end`, `project_duration`,`student_id`, `sv_id`, `ex1_id`, `ex2_id`) VALUES ('WhatCar4U', '1', '09/03/2022', '12/22/2022', '4', 'SW0107514', '1', '2', '3')");
        return redirect('projects');
    }
    
    public function delProject($project_id){
        DB::delete('delete from projects where project_id=?', [$project_id]);
        return redirect('projects');
    }

    // ***** Display functions *****
    public function showDashboard(){
        return view('dashboard');
    }

    public function showLecturer(){
        $lecturerList = lecturer::paginate(30);
        return view('lecturerList', ['lectDisplay' => $lecturerList]);
    }
    
    public function showStudent(){
        $studentList = student::paginate(30);
        return view('studentList', ['studDisplay' => $studentList]);
    }
    
    public function showProject(){
        $projectList = project::paginate(30);
        $lecturerList = lecturer::all();
        return view('projectList', ['projectDisplay' => $projectList]);
    }

    public function showAddProject(){
        $lecturerList = lecturer::all();
        $studentList = student::all();
        return view('addProject',
            [
                'lecturerDisplay' => $lecturerList,
                'studentDisplay' => $studentList
            ]
        );
    }
}
