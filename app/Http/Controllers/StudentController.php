<?php

namespace App\Http\Controllers;

use App\Http\Requests\newStudentRequestFormValidation;
use App\Models\student;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class StudentController extends Controller
{

    public function index()
    {
        $students=student::all();
        return view('students.index')->with('students',$students);

    }

    public function create()
    {
        return view('students.create');

    }

    public function store(newStudentRequestFormValidation $request)
    {
        $input=$request->all();
        student::create($input);
        return redirect('students');
    }

    public function show($id)
    {
        $student=student::find($id);
        return view('students.show')->with('students',$student);
    }

    public function edit($id)
    {
        $students=student::find($id);
        return view('students.edit')->with('students',$students);

    }

    public function update(newStudentRequestFormValidation $request, $id)
    {
        $students=student::find($id);
        $input=$request->all();
        $students->update($input);
        return redirect('students');

    }

    public function destroy($id)
    {
        student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}