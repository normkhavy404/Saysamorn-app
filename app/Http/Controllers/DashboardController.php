<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $student = DB::table('students')->count();
        $teacher = DB::table('teachers')->count();
        $academic_classes = DB::table('academic_classes')->count();
        $users = DB::table('users')->count();
        return view('dashboard', compact('student','teacher','academic_classes','users'));
    }
}
