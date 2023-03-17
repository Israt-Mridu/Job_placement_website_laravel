<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function jobDetails(){
        return view('frontEnd.job.job-details');
    }
}
