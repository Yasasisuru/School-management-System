<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnrollmentControlelr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
      return view("enrollments.index")->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollment')->with('Flash_message','enrollment added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments= Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments= Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments = $enrollments->update($input);
        return redirect('enrollments')->with('flash_message','enrollment4s update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message','enrollment deleted');
    }

}
