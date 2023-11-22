@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($data->title_en)) : 
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    else:
      $pageTitle = nova_get_setting('og_site_name');
    endif;
    $deadline = new DateTime($data->application_deadline);
    $now = new DateTime();
@endphp
@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
@section('archive-title')
{{ $data->title_en }} {{ ' - ' }}
@endsection
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container article-detailed-view {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >

        <div class="container page-content no-image">
            <div class="row">
                <div class="col-12">
                  <div class="page-title  pt-4">
                    <div class="page-title-inner">
                        <span class="lang-{{$language}} visible"><h4>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h4></span>
                      <div class="single-under-title d-flex">
                        
                        <div style="width: 100%;">
                          <div class="single-resource-meta">
                            <p class="lang-{{$language}} visible"><i class="far fa-clock"></i><span class="pr-2 pl-2">{{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->created_at)->timestamp ) : Carbon\Carbon::parse($data->created_at)->format('d M Y - H:i') }}</span></p>
                          </div>
                          @php if(function_exists('hashSocialShare')): @endphp
                          {{ hashSocialShare($actual_link, $pageTitle) }}
                          @php endif; @endphp
                        </div> <!-- / row -->
          
                      </div> <!-- / single-under-title -->
                    </div><!-- / page-title-inner -->
                    
                  </div><!-- / page-title -->
                  
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                          <div class="page-text">
                            <div class="pr-3 pl-3">
                              @if(!empty($data->content_dh || $data->content_en))
                              <span class="lang-{{$language}} visible">
                                <div class="row">
                                  @if($language == 'dh')
                                    {!!$data->content_dh!!}
                                  @elseif($language == 'en')
                                    {!!$data->content_en!!}
                                  @endif
                                </div><!--row-->
                              </span><!--lang-->
                              @endif
                            </div>
                            @if(!empty($data->main_pdf))
                            <div class="resource-item-section">
                              @php $rand_id = rand(); @endphp
                              <div class="block-container mb-5 ">
                                <div class="pdf-embedd-container" id="pdfembedd@php echo $rand_id; @endphp"></div>
                                <script>
                                  WebViewer({
                                    path: '{{ asset('vendor/pdfjsexpress/lib') }}', // path to the PDF.js Express'lib' folder on your server
                                    licenseKey: '{{ nova_get_setting('pdf_express_api_key') }}',
                                    initialDoc: '{{ getMedia($data->main_pdf, null) }}',
                                    // initialDoc: '/path/to/my/file.pdf',  // You can also use documents on your server
                                  }, document.getElementById('pdfembedd@php echo $rand_id; @endphp'))
                                  .then(instance => {
                                    // now you can access APIs through the WebViewer instance
                                    const { Core, UI } = instance;
                                    //instance.UI.setTheme('dark');
                                  });
                                </script>
                              </div>
                            </div>
                            @endif
                          </div> <!-- / page-text -->
                        </div> <!-- / col-lg-8 -->
                        <div class="col-lg-4">
                          <div class="sidebar">
                            <div class="widget">
                              <div class="widget-container">
                                <span class="lang-{{$language}} visible">
                                  <h5 class="widget-title with-bg">{{ $language == 'dh' ? 'އެންޓްރީ ތަފްސީލް' : 'Entry Details' }}</h5>
                                </span>
                                <div class="widget-content">
                                  
                                  <div class="publication-meta">
                                    <div class="row">
                                      @if(!empty($data->number))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'ނަންބަރ:' : 'Number:' }}</span> {{ $data->number }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->created_at))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'ތާރީހް:' : 'Date:' }}</span> {{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->created_at)->timestamp ) : Carbon\Carbon::parse($data->created_at)->format('d M Y - H:i') }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->office_en && $data->office_dh ))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'އޮފީސް:' : 'Office:' }}</span> {{ $language == 'dh' ? $data->office_dh : $data->office_en }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->section_en && $data->section_dh ))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'ސެކްޝަން:' : 'Section:' }}</span> {{ $language == 'dh' ? $data->section_dh : $data->section_en }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->application_deadline))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'މުއްދަތު ހަމަވަނީ:' : 'Deadline:' }}</span> {{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->application_deadline)->timestamp ) : Carbon\Carbon::parse($data->application_deadline)->format('d M Y - H:i') }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->open_vacancies))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'ބޭނުންވާ އަދަދު:' : 'Open Vacancies:' }}</span> {{ $data->open_vacancies }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->basic_salary))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'އަސާސީ މުސާރަ:' : 'Basic Salary:' }}</span> {{ $data->basic_salary }} {{ $language == 'dh' ? 'ރުފިޔާ' : 'MVR' }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->living_allowance))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'ލިވިންގ އެލަވަންސް:' : 'Living Allowance:' }}</span> {{ $data->living_allowance }} {{ $language == 'dh' ? 'ރުފިޔާ' : 'MVR' }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->service_allowance))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'ސަރވިސް އެލަވަންސް:' : 'Service Allowance:' }}</span> {{ $data->service_allowance }} {{ $language == 'dh' ? 'ރުފިޔާ' : 'MVR' }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->other_allowance))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'އެހެނިހެން އެލަވަންސް:' : 'Other Allowance:' }}</span> {{ $data->other_allowance }} {{ $language == 'dh' ? 'ރުފިޔާ' : 'MVR' }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->position_rank))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'މަގާމުގެ ރޭންކް:' : 'Position Rank:' }}</span> {{ $data->position_rank }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      @if(!empty($data->position_rank))
                                        <div class="col-lg-12">
                                          <div class="publication-meta-item">
                                            <span class="lang-{{$language}} visible"><p class="mb-0"><span class="text-color-primary">{{ $language == 'dh' ? 'މަގާމުގެ ކްލެސިފިކޭޝަން:' : 'Position Classification:' }}</span> {{ $data->position_classification }}</p></span>
                                          </div><!-- / publication-meta-item -->
                                        </div><!-- / col-lg-12 -->
                                      @endif
                                      <div class="col-lg-12 pt-3">
                                        @if($deadline < $now)
                                          <div class="lang-{{$language}} visible">
                                            <div class="btn btn-small grey">
                                              {{ $language == 'dh' ? 'ވަޒީފާއަށް ކުރިމަތިލެއްވުމައް' : 'Apply Online' }}
                                            </div>
                                            <div class="info-box warning mt-2">
                                              <div class="text-container">
                                                <p>{{ $language == 'dh' ? 'މާފުކުރައްވާ! މިވަޒީފާއަށް ކުރިމަތިލުމުގެ މުއްދަތު މިހާރު ހަމަވެއްޖެ. ދެން މިވަޒީފާއަކަށް ކުރިމައްޗެއް ނުލެވޭނެ.' : 'Sorry! the deadline for this job has already passed. You can no longer apply for this job.' }}</p>
                                              </div>
                                            </div>
                                          </div>
                                        @else 
                                          <div class="lang-{{$language}} visible">
                                            <a class="btn btn-full primary text-light" href="/{{ nova_get_setting('online_job_application_link') ?? '#' }}">
                                              {{ $language == 'dh' ? 'ވަޒީފާއަށް ކުރިމަތިލެއްވުމައް' : 'Apply Online' }}
                                            </a>
                                          </div>
                                        @endif
                                      </div>
                                    </div>
                                  </div><!-- / gazette-meta -->
                                  
                                </div>
                              </div>
                            </div>
                            @if( count($data->attachment) >= 1 )
                            <div class="widget">
                              <div class="widget-container">
                                  <span class="lang-{{$language}} visible">
                                    <h5 class="widget-title with-bg">{{ $language == 'dh' ? 'އެޓޭޗްމަންޓް' : 'Attachments' }}</h5>
                                  </span>
                                <div class="widget-content">
                                  <div class="publication-attachments">
                                    @foreach($data->attachment as $item)
                                      <div class="publication-attachment">
                                        <a target="_blank" href="{{ getMedia($item['attributes']['attachment'], null) }}"><span class="lang-{{$language}} visible"><i class="fas fa-download {{ $language == 'dh' ? 'pl-1' : 'pr-1' }}"></i>&nbsp;{{ $language == 'dh' ? $item['attributes']['title_dh'] : $item['attributes']['title_en'] }}</span></a>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endif
                            <!--Sidebar widgets here-->
                            <div class="lang-{{$language}} visible">
                              @if($language == 'dh')
                                @if(!empty($sidebar->content_dh))
                                    <livewire:handlers.sidebar-handler-component :data="$sidebar->content_dh"/>
                                @endif
                              @elseif($language == 'en')
                                @if(!empty($sidebar->content_en))
                                    <livewire:handlers.sidebar-handler-component :data="$sidebar->content_en"/>
                                @endif
                              @endif
                            </div>
                          </div><!-- / sidebar -->
                        </div><!-- / col-lg-4 -->
                    </div> <!--row-->
                </div><!-- / col-12 -->       
            </div> <!-- / row -->
        </div><!-- / container -->
    </div> <!-- / page-container -->   