<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $teachers = Teachers::all();

        // Return the view with the teacher data
        return view('teachers.index')->with('teacher',  $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teachers::create($input);
        return redirect('teachers')->with('flash_message','Teacher Added ! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        $teachers = Teachers::find($id);
        return view('teachers.show')->with('teachers',  $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $teachers = Teachers::find($id);
        return view('teachers.edit')->with('teachers',  $teachers);

        // Fetch the teacher by ID


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teachers = Teachers::find($id);
        $input = $request->all();
        $teachers->update($input);
return redirect('teacher')->with('flash_message','teacher update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teachers::destroy($id);
        return redirect('teacher')->with('flash_message','teacher deleted');
    }
}
