<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use App\Models\Students;
use Illuminate\View\View;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $students = students::all();

        // Return the view with the students data
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Students::create($input);
        return redirect('students')->with('flash_message','Student Added ! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        $student = Students::find($id);
        return view('students.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $student = Students::find($id);
        return view('students.edit')->with('student', $student);

        // Fetch the student by ID


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Students::find($id);
        $input = $request->all();
        $student->update($input);
return redirect('students')->with('flash_message','students update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
