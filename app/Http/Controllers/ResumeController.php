<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{

    public function index(){
        $resume = Storage::json('app/resume.json');
        return view("resume.index", compact('resume'));
    }
}
