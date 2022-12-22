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
        echo $req->svPriv;

        if($req->svPriv){
            project::where('project_id', '=', $req->project_id)->update(array(
                'project_start' => $req->start,
                'project_end' => $req->end,
                'project_progress' => $req->progress,
                'project_status' => $req->status
            ));
        }else{
            DB::update("UPDATE projects set project_title=?, project_type=?, project_duration=?, sv_id=?, ex1_id=?, ex2_id=? WHERE project_id=?", [$req->title, $req->type, $req->duration, $req->sv_id, $req->ex1_id, $req->ex2_id, $req->project_id]);
        }

        return redirect('projects');
    }
    
    public function delProject($project_id){
        DB::delete('delete from projects where project_id=?', [$project_id]);
        return redirect('projects');
    }

    // ***** Display functions *****
    public function showHome(Request $req){
        return view('home');
    }

    public function showDashboard(Request $req){
        if($req->session()->get('lect_id') == "")
            return redirect('/login');
        else{
            $onTrack = project::where('project_status', '=', 1)->get()->count();
            $delayed = project::where('project_status', '=', 2)->get()->count();
            $extended = project::where('project_status', '=', 3)->get()->count();
            $completed = project::where('project_status', '=', 4)->get()->count();
            $finished = project::where('project_status', '=', 5)->get()->count();

            $total = project::all()->count();
            $development = project::where('project_type', '=', 41)->get()->count();
            $research = project::where('project_type', '=', 2)->get()->count();
            return view('dashboard', [
                'onTrack' => $onTrack,
                'delayed' => $delayed,
                'extended' => $extended,
                'completed' => $completed,
                'finished' => $finished,
                'development' => $development,
                'research' => $research
            ]);
        }
    }
    
    public function showSignIn(Request $req){
        if($req->session()->get('lect_id') == "")
            return view('signin');
        else
            return redirect('/dashboard');
    }
    
    public function showProfile(Request $req){
        if($req->session()->get('lect_id') == "")
            return redirect('/login');
        else{
            return view('profile', []);
        }
    }

    public function showLecturer(Request $req){
        if($req->session()->get('lect_id') == "")
            return redirect('/login');
        else if($req->session()->get('lect_coordinator') == 1){
            $lecturerList = lecturer::paginate(30);

            return view('lecturerList', [
                'lectDisplay' => $lecturerList,
            ]);
        }else{
            return redirect('/dashboard');
        }
    }
    
    public function showStudent(Request $req){
        if($req->session()->get('lect_id') == "")
            return redirect('/login');
        else{
            if($req->student_id){
                $student = student::where('student_id', $req->student_id)->first();
                return view('viewStudent', [
                    'student' => $student
                ]);
            }
            else{
                $studentList = student::paginate(30);

                return view('studentList', [
                    'studDisplay' => $studentList,
                ]);
            }
        }
    }
    
    public function showProject(Request $req){
        if($req->session()->get('lect_id') == "")
            return redirect('/login');
        else{
            if($req->project_id){
                $project = project::where('project_id', '=', $req->project_id)->get()[0];
                $sv = lecturer::where('lect_id', '=', $project->sv_id)->get()[0];
                $ex1 = lecturer::where('lect_id', '=', $project->ex1_id)->get()[0];
                $ex2 = lecturer::where('lect_id', '=', $project->ex2_id)->get()[0];
                $studentList = student::all();
                $lecturerList = lecturer::all();

                $project->sv_id == $req->session()->get('lect_id')? $svPriv = 1 : $svPriv = 0;

                return view('editProject',
                    [
                        'project' => $project,
                        'studentList' => $studentList,
                        'sv' => $sv,
                        'ex1' => $ex1,
                        'ex2' => $ex2,
                        'lecturerDisplay' => $lecturerList,
                        'svPriv' => $svPriv
                    ]
                );
            }
            else{
                $projectList = project::paginate(10);
                $superviseeList = project::where([
                    ['sv_id', '=',  $req->session()->get('lect_id')],
                    ['project_status', '!=', 5],
                ])->get();
                $examineeList = project::where([
                    ['ex1_id', '=',  $req->session()->get('lect_id')],
                    ['project_status', '!=', 5],
                ])->orWhere([
                    ['ex2_id', $req->session()->get('lect_id')],
                    ['project_status', '!=', 5],
                ])->get();
                $lecturerList = lecturer::all();
                $studentList = student::all();
                
                return view('projectList', [
                    'projectDisplay' => $projectList,
                    'superviseeDisplay' => $superviseeList,
                    'examineeDisplay' => $examineeList,
                    'lecturerDisplay' => $lecturerList,
                    'studentDisplay' => $studentList,
                ]);
            }
        }
    }

    // ***** Login functions *****
    public function check(Request $req){        
        $session = lecturer::where('lect_email', $req->email)->where('lect_password', $req->password)->get();

        if(count($session)){
            $req->session()->put('lect_id', $session[0]->lect_id);
            $req->session()->put('lect_name', $session[0]->lect_name);
            $req->session()->put('lect_email', $session[0]->lect_email);
            $req->session()->put('lect_dept', $session[0]->lect_dept);
            $req->session()->put('lect_coordinator', $session[0]->lect_coordinator);
            return redirect('/dashboard');
        }else
            return redirect('/login')->with('msg', 'Email or password does not match');
    }

    public function destroy(Request $req){
        $req->session()->flush();
        return redirect('/');
    }
}