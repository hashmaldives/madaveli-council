<?php

namespace App\Http\Controllers;

use ZipArchive;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\IdeaBoxSubmission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use App\Models\ApplicationFormSubmission;
use Illuminate\Contracts\Encryption\DecryptException;

class ZipController extends Controller
{
    /**===========================================================================
                                * APPLICATION FORM
    =========================================================================== */
    public function applicationFormSubmission($id)
    {
        if(Auth::user()) {
            try {
                $decrypted = Crypt::decrypt($id);
            } catch (DecryptException $e) {
                abort('404');
            }
            $model = ApplicationFormSubmission::with('user_attachment')->findorfail($decrypted);
            $zip = new ZipArchive;
            //$zipFileName = Str::uuid() . '.zip';
            $zipFileName = 'Application Submission #' . $model->id . ' - ' . $model->name . '.zip';
            $path = public_path('storage' . $zipFileName);

            if ($zip->open($path, ZipArchive::CREATE) === TRUE) {
                foreach ($model->user_attachment as $key => $item) {
                    $urlPath = Storage::disk('public')->url($item->path);
                    $url = public_path('storage/'.$item->path);
                    $zip->addFile($url,$item->name);
                }
                $zip->close();
            }
            // Set Header
            $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
            $filetopath = $path;
            // Create Download Response
            if (file_exists($filetopath)) {
                return response()->download($filetopath, $zipFileName, $headers)->deleteFileAfterSend(true);
            }
        } else {
            abort(404);
        }
    }
    /**===========================================================================
                                * APPLICATION FORM
    =========================================================================== */



    /**===========================================================================
                                    * IDEA BOX
    =========================================================================== */
    public function ideaBoxSubmission($id)
    {
        if(Auth::user()) {
            try {
                $decrypted = Crypt::decrypt($id);
            } catch (DecryptException $e) {
                abort('404');
            }
            $model = IdeaBoxSubmission::with('user_attachment')->findorfail($decrypted);
            $zip = new ZipArchive;
            //$zipFileName = Str::uuid() . '.zip';
            $zipFileName = 'Idea Box Submission #' . $model->id . ' - ' . $model->name . '.zip';
            $path = public_path('storage' . $zipFileName);

            if ($zip->open($path, ZipArchive::CREATE) === TRUE) {
                foreach ($model->user_attachment as $key => $item) {
                    $urlPath = Storage::disk('public')->url($item->path);
                    $url = public_path('storage/'.$item->path);
                    $zip->addFile($url,$item->name);
                }
                $zip->close();
            }
            // Set Header
            $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
            $filetopath = $path;
            // Create Download Response
            if (file_exists($filetopath)) {
                return response()->download($filetopath, $zipFileName, $headers)->deleteFileAfterSend(true);
            }
        } else {
            abort(404);
        }
    }
    /**===========================================================================
                                    * IDEA BOX
    =========================================================================== */



    /**===========================================================================
                                * JOB APPLICATIONS
    =========================================================================== */
    public function jobApplication($id)
    {
        if(Auth::user()) {
            try {
                $decrypted = Crypt::decrypt($id);
            } catch (DecryptException $e) {
                abort('404');
            }
            $model = JobApplication::findorfail($decrypted);
            $zip = new ZipArchive;
            //$zipFileName = Str::uuid() . '.zip';
            $zipFileName = 'Job Application Submission #' . $model->id . ' - ' . $model->name . '.zip';
            $path = public_path('storage' . $zipFileName);

            if(!empty($model->application_form)) { $application_form = public_path() . '/storage/' . $model->application_form; }
            if(!empty($model->applicant_cv)) { $applicant_cv = public_path() . '/storage/' . $model->applicant_cv; }
            if(!empty($model->national_id_card)) { $national_id_card = public_path() . '/storage/' . $model->national_id_card; }
            if(!empty($model->gce_ol_al_certificates)) { $gce_ol_al_certificates = public_path() . '/storage/' . $model->gce_ol_al_certificates; }
            if(!empty($model->college_degree_diploma_masters)) { $college_degree_diploma_masters = public_path() . '/storage/' . $model->college_degree_diploma_masters; }
            if(!empty($model->short_training_certificates)) { $short_training_certificates = public_path() . '/storage/' . $model->short_training_certificates; }
            if(!empty($model->employment_reference_letters)) { $employment_reference_letters = public_path() . '/storage/' . $model->employment_reference_letters; }
            if ($zip->open($path, ZipArchive::CREATE) === TRUE) {
                if(!empty($application_form)) { $zip->addFile($application_form, 'application_form.pdf'); }
                if(!empty($applicant_cv)) { $zip->addFile($applicant_cv, 'applicant_cv.pdf'); }
                if(!empty($national_id_card)) { $zip->addFile($national_id_card, 'national_id_card.pdf'); }
                if(!empty($gce_ol_al_certificates)) { $zip->addFile($gce_ol_al_certificates, 'gce_ol_al_certificates.pdf'); }
                if(!empty($college_degree_diploma_masters)) { $zip->addFile($college_degree_diploma_masters, 'college_degree_diploma_masters.pdf'); }
                if(!empty($short_training_certificates)) { $zip->addFile($short_training_certificates, 'short_training_certificates.pdf'); }
                if(!empty($employment_reference_letters)) { $zip->addFile($employment_reference_letters, 'employment_reference_letters.pdf'); }
                $zip->close();
            }
            // Set Header
            $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
            $filetopath = $path;
            // Create Download Response
            if (file_exists($filetopath)) {
                return response()->download($filetopath, $zipFileName, $headers)->deleteFileAfterSend(true);
            }
        } else {
            abort(404);
        }
    }
    /**===========================================================================
                                * JOB APPLICATIONS
    =========================================================================== */
}
