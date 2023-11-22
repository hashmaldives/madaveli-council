@extends('layouts.main')

@section('content')

<div dir="ltr" class="container-fluid page-container error-404-container">

    <div class="error-404">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                <div class="inner-404 ">
                    <h1>4</h1>
                    <h1><i class="fas fa-question-circle fa-spin"></i></h1>
                    <h1>4</h1>
                </div> <!-- / inner-404 -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                <div class="text">
                    <div class="content ">
                        <h3>Something went wrong</h3>
                        <p>We can't seem to find the page you're looking for.</p>
                        <a href="/" class="btn btn-small primary text-dark">GO HOME</a>
                        <a style="width: 150px;" class="btn btn-small dark mobileSearchToggler cursor-pointer text-light show-on-mobile ml-2">SEARCH FOR IT?</a>
                        <a style="width: 150px;" class="btn btn-small dark megaSearchTrigger cursor-pointer text-light show-on-desktop ml-2">SEARCH FOR IT?</a>
                        
                    </div>
                </div> <!-- / text -->
            </div>
            
            
        </div>
        
    </div>
    
</div>
    
@endsection