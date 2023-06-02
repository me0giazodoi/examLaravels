<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function listStudent(){
        $students =Student::paginate(12);
        return view("list_student", [
            "students" => $students
        ]);
    }
    public function createStudent() {
        return view("create_student", [

        ]);
    }
    public function saveStudent(Request $request) {
        $request->validate([
            "name"=>"required",
            "age"=>"required|numeric|min:0",
            "address"=>"required",
            "telephone" => "required|min:10|max:12"
        ],[
            // thong bao gi thi thong bao
        ]);
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "address" => $request->get("address"),
            "telephone" => $request->get("telephone")
        ]);
        return redirect()->to("/list_student");
    }
}
