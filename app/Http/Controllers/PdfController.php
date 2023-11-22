<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use PDF;

class PdfController extends Controller
{

    /**===========================================================================
                                * JOB APPLICATIONS
    =========================================================================== */
    
    public function generate($id, $lang)
    {
        if(Auth::user()) {
            try {
                $decrypted = Crypt::decrypt($id);
            } catch (DecryptException $e) {
                abort('404');
            }
            $model = JobApplication::with('job_opportunity')->findorfail($decrypted);
            //$name = Str::uuid() . '.pdf';
            $name = 'Job Application Submission #' . $model->id . ' - ' . $model->name . '.pdf';
            $today_date = now();
            $user = Auth::user();
            $pdf = PDF::loadView('pdf.job-application-form-pdf-' . $lang, [
                'data' => $model,
                'today_date' => $today_date,
                'user' => $user,
            ]);
            return $pdf->stream($name)->withHeaders([
                'X-Vapor-Base64-Encode' => 'True',
            ]);
        } else {
            abort(404);
        }
    }

    /**===========================================================================
                                * JOB APPLICATIONS
    =========================================================================== */
}
