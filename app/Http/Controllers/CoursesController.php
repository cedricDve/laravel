<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\CourseParticipants;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    public function index(){
        $courses = Courses::get();
        return view('courses')->with('courses',$courses);
    }
    public function buy(Request $req, $id){            
        $validatedData = $req->validate([
            'name' => ['required',],
            'email' => ['required','email'],
        ]);
       /* CourseParticipants::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'course_id'=> $id,
        ]);*/
    $course = new CourseParticipants;
        $course->name = $req->name;
        $course->email = $req->email;
        $course->course_id = $id;
     $course->save();        
        return redirect()->back();
    }
}
