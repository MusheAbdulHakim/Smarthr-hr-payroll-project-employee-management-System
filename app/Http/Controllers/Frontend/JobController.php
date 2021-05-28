<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $title = "Jobs";
        return view('frontend.job-list',compact('title'));
    }

    public function show(){
        $title = "Job View";
        return view('frontend.job-view',compact('title'));
    }
}
