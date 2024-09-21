<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        // Get the count of all students
        $studentsCount = Students::count();

        // Pass the count to the view
        return view('home', compact('studentsCount'));
    }
}
