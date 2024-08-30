<?php

namespace App\Http\Controllers;
use App\Models\Companies;
use App\Models\User;
use Illuminate\Http\Request;


class companyController extends Controller
{
    function index()
    {
        $companies = companies::all();
        $User=User::all();
        return view("company", compact('companies','User'));
    }
}
