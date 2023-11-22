<?php

use App\Models\JobApplication;
use Spatie\Browsershot\Browsershot;
use App\Http\Livewire\FormComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\SiteSearchComponent;
use App\Http\Livewire\Handlers\Resource\SingleNews;
use App\Http\Livewire\Archives\NewsArchiveComponent;
use App\Http\Livewire\Handlers\HomeHandlerComponent;
use App\Http\Livewire\Handlers\PageHandlerComponent;
use App\Http\Livewire\Handlers\Resource\SingleEvent;
use App\Http\Livewire\Archives\EventArchiveComponent;
use App\Http\Livewire\Handlers\Resource\SingleGallery;
use App\Http\Livewire\Handlers\Resource\SingleProject;
use App\Http\Livewire\Archives\GalleryArchiveComponent;
use App\Http\Livewire\Archives\ProjectArchiveComponent;
use App\Http\Livewire\Handlers\Resource\SingleBusiness;
use App\Http\Livewire\Archives\BusinessArchiveComponent;
use App\Http\Livewire\Archives\DownloadArchiveComponent;
use App\Http\Livewire\Handlers\Resource\SingleWdcMember;
use App\Http\Livewire\Handlers\Resource\SinglePublication;
use App\Http\Livewire\Archives\PublicationArchiveComponent;
use App\Http\Livewire\Handlers\SingleMediaHandlerComponent;
use App\Http\Livewire\Handlers\Resource\SingleCouncilMember;
use App\Http\Livewire\Handlers\Resource\SingleJobOpportunity;
use App\Http\Livewire\Archives\JobOpportunityArchiveComponent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if(ENV('DEPLOYMENT_COMPLETE') == 'true') {
    $websitePublishStatus = nova_get_setting('publish_website');
} else {
    $websitePublishStatus = 0;
}

if( $websitePublishStatus == 1 ):

    // Route::get('/', [HomeController::class, "home"])->name('root');
    // Route::get('/home', [HomeController::class, "home"])->name('home');

    Route::get('/', HomeHandlerComponent::class)->name('root');
    Route::get('/home', HomeHandlerComponent::class)->name('home');

    Route::get('/search', SiteSearchComponent::class)->name('site-search');

    Route::get('downloads', DownloadArchiveComponent::class);

    Route::get('news', NewsArchiveComponent::class);
    Route::get('/news/{itemID}', SingleNews::class)->name('single-news');

    Route::get('galleries', GalleryArchiveComponent::class);
    Route::get('/galleries/{itemID}', SingleGallery::class)->name('single-gallery');

    Route::get('events', EventArchiveComponent::class);
    Route::get('/events/{itemID}', SingleEvent::class)->name('single-event');

    Route::get('projects', ProjectArchiveComponent::class);
    Route::get('/projects/{itemID}', SingleProject::class)->name('single-project');

    
    // Members & Employees
    Route::get('/council-member/{slug}', SingleCouncilMember::class)->name('single-council-member');
    Route::get('/wdc-member/{slug}', SingleWdcMember::class)->name('single-wdc-member');
    //Route::get('/employee/{slug}', MediaController::class)->name('single-employee');

    //Route::get('/form/{slug}', FormComponent::class);

    Route::get('job-opportunities', JobOpportunityArchiveComponent::class);
    Route::get('/job-opportunities/{itemID}', SingleJobOpportunity::class)->name('single-job-opportunity');

    Route::get('/job-application-zip/{id}', [ZipController::class,'jobApplication']);

    Route::get('/idea-box-zip/{id}', [ZipController::class,'ideaBoxSubmission']);
    Route::get('/application-form-zip/{id}', [ZipController::class,'applicationFormSubmission']);

    Route::get('/job-application-form-pdf-generate/{id}/{lang}', [PdfController::class,'generate']);

    Route::get('serviceproviders', BusinessArchiveComponent::class);
    Route::get('/serviceprovider/{slug}', SingleBusiness::class)->name('single-business');

    Route::get('publications/{slug}', PublicationArchiveComponent::class);
    Route::get('publications/{slug}/{itemID}', SinglePublication::class)->name('single-publication');

    Route::get('{slug}/{param?}', PageHandlerComponent::class)
        ->where('slug', '^((?!' . trim(config('nova.path'), '/') . '|nova-).)*$')
        ->name('page-manager');

else:

	Route::get('/', [HomeController::class, "comingsoon"])->name('comingsoon');
	Route::get('/{any}', [HomeController::class, "comingsoon"])->name('comingsoon');

endif;