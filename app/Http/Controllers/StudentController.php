<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
       
    }

   
    public function create(): View
{
    return view('students.create');
    

}

    
    public function store(Request $request): RedirectResponse
{
    
    $validatedData = $request->validate([
        'Sname' => 'required',
        'Semail' => 'required|unique:students,Semail',
        'Smobile' => 'nullable|unique:students,Smobile',
        'Sgender' => 'required|in:F,M,O',
        
    ]);
    $validatedData['Status'] = $request->input('Status', 0);

    $student = Student::create($validatedData);
    $name = $student->Sname;
   /*  return redirect('student')->with('success', 'Student Added!'); */
    return redirect()->route('student.index')
        ->with('success', "The student ($name) has been Added successfully.");
        
}


    public function show($sd)
    {
        $student = Student::find($sd);
        return view('students.show')->with('students', $student);
       
    }


    public function edit($sd)
    {
        $student = Student::find($sd);
        return view('students.edit')->with('students', $student);
    }

  
    public function update(Request $request, $id): RedirectResponse
    {
    $validatedData = $request->validate([
        'Sname' => 'required',
        'Semail' => 'required|email|unique:students,Semail,' . $id,
        'Smobile' => 'required|numeric|unique:students,Smobile,' . $id,
        'Sgender' => 'required',
        
    ]);
    $validatedData['Status'] = $request->input('Status', 0);
    $student = Student::find($id);


    $student->fill($validatedData);
    if(!$student->isDirty()) {
        return redirect()->route('student.index')->with('success', "No Any change !!!");
    }
    
    $student->save();
    $name = $student->Sname;

    return redirect()->route('student.index')
        ->with('success', "The student ($name) has been updated successfully.");
}
         
 
    public function destroy($id):RedirectResponse
{
    $student = Student::findOrFail($id);
    $name = $student->Sname;
    $student->delete();

    return redirect()->route('student.index')
        ->with('success', "The student ($name) has been deleted successfully.");
       
}

}
