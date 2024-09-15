<?php

namespace App\Http\Controllers;

use App\Models\Teacher; // Use singular model name
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teachers::all(); // Use singular model name

        // Return the view with the teacher data
        return view('teachers.index')->with('teachers', $teachers); // Use 'teachers' instead of 'teacher'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teachers::create($input); // Use singular model name
        return redirect('teachers')->with('flash_message', 'Teacher Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teacher = Teachers::find($id); // Use singular model name
        return view('teachers.show')->with('teacher', $teacher); // Use 'teacher' instead of 'teachers'
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teacher = Teachers::find($id); // Use singular model name
        return view('teachers.edit')->with('teacher', $teacher); // Use 'teacher' instead of 'teachers'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = Teachers::find($id); // Use singular model name
        $input = $request->all();
        $teacher->update($input);
        return redirect('teachers')->with('flash_message', 'Teacher updated'); // Redirect to 'teachers'
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teachers::destroy($id); // Use singular model name
        return redirect('teachers')->with('flash_message', 'Teacher deleted'); // Redirect to 'teachers'
    }
}
