<!DOCTYPE html>
<html lang="dv">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}"> --}}
     {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
     <link rel="stylesheet" href="{{ asset('css/pdfstyles/pdfstyles.min.css') }}">
</head>

<body dir="rtl">

    <htmlpageheader name="page-header">
        @include('pdf.header')
    </htmlpageheader>
    
    <htmlpagefooter name="page-footer">
        @include('pdf.footer')
    </htmlpagefooter>
    
     <div class="main">
          <div class="container mx-auto">
            <div class="form-title pt-2 pb-1 text-center font-waheed">
                <h3>{{ nova_get_setting('job_application_form_title_dh') }}</h3>
            </div>
            <div class="form-meta pb-5">
                <div class="number font-dhivehi"><p>ނަންބަރު: {{ nova_get_setting('job_application_form_number_format') }}{{ $data->id }}</p></div>
                <div class="date font-dhivehi"><p>ހުށަހެޅީ: {{ ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->created_at)->timestamp ) }}</p></div>
            </div>
            <div class="form-section rtl">
                <div class="form-section-title font-dhivehi">
                    <h6>ހުށަހަޅާ ފަރާތުގެ މައުލޫމާތު</h6>
                </div>
                <div class="form-row">
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ފުރިހަމަ ނަން</p>
                            <p class="data font-dhivehi">{{ $data->title }} {{ $data->name ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ދާއިމީ އެޑްރެސް</p>
                            <p class="data font-dhivehi">{{ $data->permanent_address ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">މިހާރު އުޅޭ އެޑްރެސް</p>
                            <p class="data font-dhivehi">{{ $data->current_address ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ޖިންސް</p>
                            <p class="data font-dhivehi">{{ $data->gender ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އައިޑީކާޑު ނަންބަރ</p>
                            <p class="data font-dhivehi">{{ $data->nic ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އުފަން ތާރީހް</p>
                            <p class="data font-dhivehi">{{ $data->dob ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އީމެއިލް</p>
                            <p class="data font-dhivehi">{{ $data->email ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ފޯން</p>
                            <p class="data font-dhivehi">{{ $data->phone ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="form-section rtl">
                <div class="form-section-title font-dhivehi">
                    <h6>ހުށަހެޅި މަގާމް</h6>
                </div>
                <div class="form-row">
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އިއުލާން ނަންބަރ</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->number ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">މަގާމް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->title_dh ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އަސާސީ މުސާރަ</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->basic_salary ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ލިވިންގ އެލަވަންސް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->living_allowance ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ސަރވިސް އެލަވަންސް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->service_allowance ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އެހެނިހެން އެލަވަންސް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->other_allowance ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ބޭނުންވާ އަދަދު</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->open_vacancies ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">މަގާމުގެ ރޭންކް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->position_rank ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">މަގާމުގެ ކްލެސިފިކޭޝަން</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->position_classification ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އޮފީސް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->office_dh ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ސެކްޝަން / ޑިޕާޓްމަންޓް</p>
                            <p class="data font-dhivehi">{{ $data->job_opportunity->section_dh ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        
            @if(!empty( $data->gce_ol_results) && count($data->gce_ol_results) >= 0 )
                <div class="form-section rtl">
                    <div class="form-section-title font-dhivehi">
                        <h6>ޖީސީއީ އޯލެވެލް ނަތީޖާ</h6>
                    </div>
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-dhivehi">#</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މާއްދާ</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ގްރޭޑް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">އަހަރު</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->gce_ol_results as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-dhivehi">{{$key + 1}}</p></th>
                                <td><p class="body-text font-dhivehi">{{ $item['gce_ol_subject'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['gce_ol_grade'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['gce_ol_year'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->gce_al_results) && count($data->gce_al_results) >= 0 )
                <div class="form-section rtl">
                    <div class="form-section-title font-dhivehi">
                        <h6>ޖީސީއީ އޯލެވެލް ނަތީޖާ</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-dhivehi">#</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މާއްދާ</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ގްރޭޑް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">އަހަރު</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->gce_al_results as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-dhivehi">{{$key + 1}}</p></th>
                                <td><p class="body-text font-dhivehi">{{ $item['gce_al_subject'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['gce_al_grade'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['gce_al_year'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->higher_education_certificates) && count($data->higher_education_certificates) >= 0 )
                <div class="form-section rtl">
                    <div class="form-section-title font-dhivehi">
                        <h6>މަތީ ތައުލީމީ ސެޓްފިކެޓްތައް</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-dhivehi">#</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ކޯހުގެ ނަން</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ލެވެލް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ފެށި ތާރީހް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ނިމުނު ތާރީހް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މަދަރުސާގެ ނަމާއި ގައުމު</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->higher_education_certificates as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-dhivehi">{{$key + 1}}</p></th>
                                <td><p class="body-text font-dhivehi">{{ $item['higher_ed_course_name'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['higher_ed_course_level'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['higher_ed_start_date'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['higher_ed_end_date'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['higher_ed_institution_country'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->professional_trainings) && count($data->professional_trainings) >= 0 )
                <div class="form-section rtl">
                    <div class="form-section-title font-dhivehi">
                        <h6>ކުރު ތަމްރީން ޕްރޮގްރާމްތައް</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-dhivehi">#</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ޕްރޮގްރާމްގެ ނަން</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މަދަރުސާގެ ނަމާއި ގައުމު</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މުއްދަތު</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ބައިވެރިވި އަހަރު</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->professional_trainings as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-dhivehi">{{$key + 1}}</p></th>
                                <td><p class="body-text font-dhivehi">{{ $item['professional_certificate_training_name'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['professional_certificate_training_institution_country'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['professional_certificate_training_duration'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['professional_certificate_training_year'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->employment_history) && count($data->employment_history) >= 0 )
                <div class="form-section rtl">
                    <div class="form-section-title font-dhivehi">
                        <h6>ކުރިން އަދާކޮއްފައިވާ ވަޒީފާތަކުގެ ތަފްސީލް</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-dhivehi">#</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މަގާމް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ތަން</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މުއްދަތު (އަހަރުން)</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މުސާރަ</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ވަކިވި ސަބަބު</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->employment_history as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-dhivehi">{{$key + 1}}</p></th>
                                <td><p class="body-text font-dhivehi">{{ $item['employment_position_name'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['place_of_employment'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['employment_duration'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['employment_salary'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['employment_termination_reason'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            @if(!empty( $data->service_bonds) && count($data->service_bonds) >= 0 )
                <div class="form-section rtl">
                    <div class="form-section-title font-dhivehi">
                        <h6>ޚިދުމަތުގެ ބޮންޑް</h6>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 40px;" scope="col"><p class="body-heading font-dhivehi">#</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ބޮންޑު ކުރެވުނު ސަބަބު</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ބޮންޑު ކުރެވުނު މުއްދަތު</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ފެށުނު ތާރީހް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">ނިމުނު ތާރީހް</p></th>
                            <th scope="col"><p class="body-heading font-dhivehi">މިހާރު ކަން އޮތްގޮތް</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data->service_bonds as $key => $item)
                            <tr>
                                <th style="width: 40px;" scope="row"><p class="body-text font-dhivehi">{{$key + 1}}</p></th>
                                <td><p class="body-text font-dhivehi">{{ $item['bond_reason'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['bond_duration'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['bond_start_date'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['bond_dhd_date'] }}</p></td>
                                <td><p class="body-text font-dhivehi">{{ $item['bond_status'] }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        
            <div dir="rtl" class="form-section rtl">
                <div class="form-section-title font-dhivehi">
                    <h6>ހުށަހަޅާފައިވާ ލިޔުންތައް</h6>
                </div>
                <div class="form-row pt-3 pl-3 pr-3">
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi">
                                <p>ވަޒީފާއައް އެދޭ ފޯމް</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->application_form))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi">
                                <p>ސީވީ / ވަނަވަރު</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-left">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->applicant_cv))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi float-right">
                                <p>އައިޑީކާޑު ކޮޕީ</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-right">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->national_id_card))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi float-right">
                                <p>ޖީސީ އޯލެވެލް / އޭލެވެލް ސެޓްފިކެޓް</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-right">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->gce_ol_al_certificates))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi float-right">
                                <p>މަތީ ތައުލީމީ ސެޓްފިކެޓް</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-right">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->college_degree_diploma_masters))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi float-right">
                                <p>ކުރު ތަމްރީން ޕްރޮގްރާމް ސެޓްފިކެޓް</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-right">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->short_training_certificates))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="form-checkbox">
                            <div class="text font-dhivehi float-right">
                                <p>ވަޒީފާގައި އުޅުނު ކަމުގެ ލިޔުން</p>
                            </div>
                            <div style="width: 9%; height: 20px;" class="icon-container float-right">
                                <div style="width: 20px; height: 20px;" class="icon">
                                    @if(!empty($data->employment_reference_letters))
                                        <img style="width: 20px; height: 20px; padding-right: 3px;" src="{{ asset('assets/icons/checkmark.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div dir="rtl" class="form-section rtl">
                <div class="form-section-title font-dhivehi">
                    <h6>އޮފީހުގެ ބޭނުމަށް</h6>
                </div>
                <div class="form-row pt-3">
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ބަލައިގަތީ</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">ޗްކް ކުރީ</p>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="form-text-field">
                            <p class="label font-dhivehi">އެޕްރޫވް ކުރީ</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
     </div>
</body>

</html>