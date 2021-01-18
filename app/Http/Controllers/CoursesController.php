<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    public function index(){
        $courses = Courses::get();
        return view('courses')->with('courses',$courses);
    }
    public function buy(Request $req, $id){
        $courses = Courses::find($id);
        dd($id);
        CourseParticipants::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'course_id'=> $id,
        ]);
        
        return redirect()->back();
    }
}
