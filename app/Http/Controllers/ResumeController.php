<?php

namespace App\Http\Controllers;

use App\Services\ResumeService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{

    public function __construct(protected ResumeService $service)
    {
        
    }

    public function index(){

        $resume = $this->service->getResume();

        return view("resume.index", compact('resume'));
    }

    public function download(){
        $pdf = $this->service->getResumePdfFormat();

        return $pdf->download('resume.pdf');
    }
}
