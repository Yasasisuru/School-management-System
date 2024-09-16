<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $courses = Course::all();
      return view("Courses.index")->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('Flash_message','Courses added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses= Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses= Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses = $courses->update($input);
        return redirect('courses')->with('flash_message','course4s update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message','course deleted');
    }
}
