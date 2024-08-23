<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class facultyController extends Controller
{
    function index(){
        $faculty=DB::select("SELECT* FROM faculties");
        return view("faculty",compact('faculty'));
    }
}
