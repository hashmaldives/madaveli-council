<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}"> --}}
     {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
     <link rel="stylesheet" href="{{ asset('css/pdfstyles/pdfstyles.min.css') }}">
</head>

<body dir="ltr">

    <htmlpageheader name="page-header">
        @include('pdf.header')
    </htmlpageheader>
    
    <htmlpagefooter name="page-footer">
        @include('pdf.footer')
    </htmlpagefooter>
    
     <div class="main">
          <div class="container mx-auto">
            <div class="form-title pt-2 pb-1 text-center font-english-500">
                <h3>{{ nova_get_setting('job_application_form_title_en') }}</h3>
            </div>
            <div class="form-meta pb-5">
                <div class="number font-english"><p>Number: {{ nova_get_setting('job_application_form_number_format') }}{{ $data->id }}</p></div>
                <div class="date font-english"><p>Submitted on: {{ Carbon\Carbon::parse($data->created_at)->format('d M Y - H:i A') }}</p></div>
            </div>
            <div class="form-section ltr">
                <div class="form-section-title font-english">
                    <h6>Personal Information</h6>
                </div>
                <div class="form-row">
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-english">Full Name</p>
                            <p class="data font-english">{{ $data->title }} {{ $data->name ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-english">Permanent Address</p>
                            <p class="data font-english">{{ $data->permanent_address ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-english">Current Address</p>
                            <p class="data font-english">{{ $data->current_address ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Gender</p>
                            <p class="data font-english">{{ $data->gender ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">National ID Number</p>
                            <p class="data font-english">{{ $data->nic ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-english">Date of birth</p>
                            <p class="data font-english">{{ $data->dob ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-english">Email</p>
                            <p class="data font-english">{{ $data->email ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-english">Phone</p>
                            <p class="data font-english">{{ $data->phone ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="form-section ltr">
                <div class="form-section-title font-english">
                    <h6>Applied Position</h6>
                </div>
                <div class="form-row">
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-english">Announcement Number</p>
                            <p class="data font-english">{{ $data->job_opportunity->number ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-english">Position</p>
                            <p class="data font-english">{{ $data->job_opportunity->title_en ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Basic Salary</p>
                            <p class="data font-english">{{ $data->job_opportunity->basic_salary ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Living Allowance</p>
                            <p class="data font-english">{{ $data->job_opportunity->living_allowance ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Service Allowance</p>
                            <p class="data font-english">{{ $data->job_opportunity->service_allowance ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Other Allowances</p>
                            <p class="data font-english">{{ $data->job_opportunity->other_allowance ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Open Vacancies</p>
                            <p class="data font-english">{{ $data->job_opportunity->open_vacancies ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Position Rank</p>
                            <p class="data font-english">{{ $data->job_opportunity->position_rank ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Position Classification</p>
                            <p class="data font-english">{{ $data->job_opportunity->position_classification ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Office</p>
                            <p class="data font-english">{{ $data->job_opportunity->office_en ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-english">Section / Department</p>
                            <p class="data font-english">{{ $data->job_opportunity->section_en ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        
            @if(!empty( $data->gce_ol_results) && count($data->gce_ol_results) >= 0 )
                <div class="form-section ltr">
                    <div class="form-section-title font-english">
                        <h6>GCE O/L Results</h6>
                    </div>
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-english">#</p></th>
                            <th scope="col"><p class="body-heading font-english">Subject</p></th>
                            <th scope="col"><p class="body-heading font-english">Grade</p></th>
                            <th scope="col"><p class="body-heading font-english">Year</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->gce_ol_results as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-english">{{$key + 1}}</p></th>
                                <td><p class="body-text font-english">{{ $item['gce_ol_subject'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['gce_ol_grade'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['gce_ol_year'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->gce_al_results) && count($data->gce_al_results) >= 0 )
                <div class="form-section ltr">
                    <div class="form-section-title font-english">
                        <h6>GCE A/L Results</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-english">#</p></th>
                            <th scope="col"><p class="body-heading font-english">Subject</p></th>
                            <th scope="col"><p class="body-heading font-english">Grade</p></th>
                            <th scope="col"><p class="body-heading font-english">Year</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->gce_al_results as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-english">{{$key + 1}}</p></th>
                                <td><p class="body-text font-english">{{ $item['gce_al_subject'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['gce_al_grade'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['gce_al_year'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->higher_education_certificates) && count($data->higher_education_certificates) >= 0 )
                <div class="form-section ltr">
                    <div class="form-section-title font-english">
                        <h6>Higher Education Certificates</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-english">#</p></th>
                            <th scope="col"><p class="body-heading font-english">Course Name</p></th>
                            <th scope="col"><p class="body-heading font-english">Level</p></th>
                            <th scope="col"><p class="body-heading font-english">Start Date</p></th>
                            <th scope="col"><p class="body-heading font-english">End Date</p></th>
                            <th scope="col"><p class="body-heading font-english">Institution Name & Country</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->higher_education_certificates as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-english">{{$key + 1}}</p></th>
                                <td><p class="body-text font-english">{{ $item['higher_ed_course_name'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['higher_ed_course_level'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['higher_ed_start_date'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['higher_ed_end_date'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['higher_ed_institution_country'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->professional_trainings) && count($data->professional_trainings) >= 0 )
                <div class="form-section ltr">
                    <div class="form-section-title font-english">
                        <h6>Professional Trainings / Certificates</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-english">#</p></th>
                            <th scope="col"><p class="body-heading font-english">Training Name</p></th>
                            <th scope="col"><p class="body-heading font-english">Institution / Country</p></th>
                            <th scope="col"><p class="body-heading font-english">Duration</p></th>
                            <th scope="col"><p class="body-heading font-english">Year</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->professional_trainings as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-english">{{$key + 1}}</p></th>
                                <td><p class="body-text font-english">{{ $item['professional_certificate_training_name'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['professional_certificate_training_institution_country'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['professional_certificate_training_duration'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['professional_certificate_training_year'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->employment_history) && count($data->employment_history) >= 0 )
                <div class="form-section ltr">
                    <div class="form-section-title font-english">
                        <h6>Employment History</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-english">#</p></th>
                            <th scope="col"><p class="body-heading font-english">Position Name</p></th>
                            <th scope="col"><p class="body-heading font-english">Place of employment</p></th>
                            <th scope="col"><p class="body-heading font-english">Duration (Years)</p></th>
                            <th scope="col"><p class="body-heading font-english">Salary</p></th>
                            <th scope="col"><p class="body-heading font-english">Reason of termination</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->employment_history as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-english">{{$key + 1}}</p></th>
                                <td><p class="body-text font-english">{{ $item['employment_position_name'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['place_of_employment'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['employment_duration'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['employment_salary'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['employment_termination_reason'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->service_bonds) && count($data->service_bonds) >= 0 )
                <div class="form-section ltr">
                    <div class="form-section-title font-english">
                        <h6>Service Bonds</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-english">#</p></th>
                            <th scope="col"><p class="body-heading font-english">Reason for the bond</p></th>
                            <th scope="col"><p class="body-heading font-english">Bond duration</p></th>
                            <th scope="col"><p class="body-heading font-english">Start Date</p></th>
                            <th scope="col"><p class="body-heading font-english">End Date</p></th>
                            <th scope="col"><p class="body-heading font-english">Current status</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->service_bonds as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-english">{{$key + 1}}</p></th>
                                <td><p class="body-text font-english">{{ $item['bond_reason'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['bond_duration'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['bond_start_date'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['bond_end_date'] }}</p></td>
                                <td><p class="body-text font-english">{{ $item['bond_status'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            <div class="form-section ltr">
                <div class="form-section-title font-english">
                    <h6>Submitted Documents</h6>
                </div>
                <div class="form-row pt-3 pl-3 pr-3">
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->application_form))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>Application Form</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->applicant_cv))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>Applicant CV</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->national_id_card))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>National ID Copy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->gce_ol_al_certificates))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>GCE O/L A/L Certificates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->college_degree_diploma_masters))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>Higher Education Certificates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->short_training_certificates))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>Short Training Certifications</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->employment_reference_letters))
                                        <img style="width: 20px; height: 20px; padding-left: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                            <div class="text text-english float-left">
                                <p>Employment Reference Letters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div dir="ltr" class="form-section ltr">
                <div class="form-section-title font-english">
                    <h6>For Office Use</h6>
                </div>
                <div class="form-row pt-3">
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-english">Handled By</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-english">Checked By</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-english">Approved By</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
     </div>
</body>

</html>