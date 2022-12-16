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
        echo $req->duration;
        echo '<br/>';
        echo $req->student_id;
        echo '<br/>';
        echo $req->sv_id;
        echo '<br/>';
        echo $req->ex1_id;
        echo '<br/>';
        echo $req->ex2_id;
        DB::insert("INSERT INTO `projects` (`project_title`, `project_type`, `project_duration`,`student_id`, `sv_id`, `ex1_id`, `ex2_id`) VALUES (?, ?, ?, ?, ?, ?, ?)", [$req->title, $req->type, $req->duration, $req->student_id, $req->sv_id, $req->ex1_id, $req->ex2_id]);
        return redirect('projects');
    }

    public function editProject(Request $req){
        echo $req->title;
        echo '<br/>';
        echo $req->type;
        echo '<br/>';
        echo $req->duration;
        echo '<br/>';
        echo $req->sv_id;
        echo '<br/>';
        echo $req->ex1_id;
        echo '<br/>';
        echo $req->ex2_id;

        DB::update("UPDATE projects set project_title=?, project_type=?, project_duration=?, sv_id=?, ex1_id=?, ex2_id=? WHERE project_id=?", [$req->title, $req->type, $req->duration, $req->sv_id, $req->ex1_id, $req->ex2_id, $req->project_id]);

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
    
    public function showSignIn(){
        return view('signin');
    }
    
    public function showSignOut(){
        return redirect('/');
    }
    
    public function showProfile(){
        return view('profile');
    }

    public function showLecturer(){
        $lecturerList = lecturer::paginate(30);
        return view('lecturerList', ['lectDisplay' => $lecturerList]);
    }
    
    public function showStudent(){
        $studentList = student::paginate(6);
        return view('studentList', ['studDisplay' => $studentList]);
    }
    
    public function showProject(){
        $projectList = project::paginate(6);
        $lecturerList = lecturer::all();
        $studentList = student::all();
        return view('projectList', [
                'projectDisplay' => $projectList,
                'lecturerDisplay' => $lecturerList,
                'studentDisplay' => $studentList
            ]
        );
    }

    public function showEditProject($id){
        $project = DB::table('projects')
            ->select('*')
            ->where('project_id', '=', $id)
            ->get()[0];

        $sv = DB::table('lecturers')
            ->select('*')
            ->where('lect_id', '=', $project->sv_id)
            ->get()[0];
            
        $ex1 = DB::table('lecturers')
        ->select('*')
        ->where('lect_id', '=', $project->ex1_id)
        ->get()[0];

        $ex2 = DB::table('lecturers')
            ->select('*')
            ->where('lect_id', '=', $project->ex2_id)
            ->get()[0];
        

        $student = DB::table('students')
            ->select('*')
            ->where('student_id', '=', $project->student_id)
            ->get()[0];

        $lecturerList = lecturer::all();

        return view('editProject',
            [
                'project' => $project,
                'student' => $student,
                'sv' => $sv,
                'ex1' => $ex1,
                'ex2' => $ex2,
                'lecturerDisplay' => $lecturerList,
            ]
        );
    }
}