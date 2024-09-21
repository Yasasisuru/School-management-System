<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $teachersCount = Teachers::count();
        $studentsCount = Students::count();
        $coursesCount = Course::count();
        $batchesCount = Batch::count();

        // Pass counts to the view
        return view('home', compact('teachersCount', 'studentsCount', 'coursesCount', 'batchesCount'));
    }
    }

