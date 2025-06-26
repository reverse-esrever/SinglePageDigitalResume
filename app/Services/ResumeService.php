<?php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ResumeService
{
    public function getResume(): array
    {
        return Cache::remember('resume', 300, function(){
            return Storage::json('app/resume.json');
        });
    }

    public function getResumePdfFormat(): DomPDFPDF{
        $resume = $this->getResume();
        return Pdf::loadView('resume.pdf.index', compact("resume"));
    }
}