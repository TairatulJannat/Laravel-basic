<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    public function index(){
        return "you are an administrator because you are the boss";
    }
}
