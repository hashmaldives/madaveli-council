@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($data->title_en)) : 
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    else:
      $pageTitle = nova_get_setting('og_site_name');
    endif;
@endphp
@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
{{-- {{dd($data->attachment)}} --}}
@section('archive-title')
{{ $data->title_en }} {{ ' - ' }}
@endsection

    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container article-detailed-view {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >
        <div class="container page-content no-image">
            <div class="row">
                <div class="col-12">
                  <div class="page-title  pt-4">
                    <div class="page-title-inner">
                      <div class="breadcrumb pb-1">
                        <p class="mb-0 d-flex">
                          <a href="/"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ފުރަތަމަ ސަފްހާ' : 'Home' }}</span></a>
                          <span class="lang-{{$language}} visible"><i class="fas fa-chevron-{{ $language == 'dh' ? 'left' : 'right' }}"></i></span>
                          <a><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $archiveTitleDh : $archiveTitleEn }}</span></a>
                          <span class="lang-{{$language}} visible"><i class="fas fa-chevron-{{ $language == 'dh' ? 'left' : 'right' }}"></i></span>
                          <a href="/publications/{{$data->publication_category->slug}}"><span class="lang-{{$language}} visible text-primary">{{ $language == 'dh' ? $data->publication_category->title_dh : $data->publication_category->title_en }}</span></a>
                        </p>
                      </div>
                      <span class="lang-{{$language}} visible"><h4>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h4></span>
                      <div class="single-under-title d-flex">
                        <div style="width: 100%;">
                          <div class="single-resource-meta">
                            <div class="d-flex align-items-center mb-3">
                              <p class="lang-{{$language}} visible mb-0"><i class="far fa-clock"></i><span class="pr-2 pl-2">{{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->created_at)->timestamp ) : Carbon\Carbon::parse($data->created_at)->format('d M Y - H:i') }}</span></p>
                              <div class="lang-{{ $language }} visible">
                                <a href="/publications/{{$data->publication_category->slug}}" class="resource-tag-page small"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $data->publication_category->title_dh : $data->publication_category->title_en }}</a>
                              </div>
                            </div>
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
                                    </div>
                                  </div><!-- / gazette-meta -->
                                  
                                </div>
                              </div>
                            </div>
                            @php 
                            if(is_array($data->attachment)) {
                              $attachments = json_encode($data->attachment);
                              $attachments = json_decode($attachments);
                            } else {
                              $attachments = json_decode($data->attachment);
                            }
                            @endphp
                            @if( count($attachments) >= 1 )
                            <div class="widget">
                              <div class="widget-container">
                                  <span class="lang-{{$language}} visible">
                                    <h5 class="widget-title with-bg">{{ $language == 'dh' ? 'އެޓޭޗްމަންޓް' : 'Attachments' }}</h5>
                                  </span>
                                <div class="widget-content">
                                  <div class="publication-attachments">
                                    @foreach($attachments as $item)
                                      <div class="publication-attachment">
                                        <a target="_blank" href="{{ getMedia($item->attributes->attachment, null) }}"><span class="lang-{{$language}} visible"><i class="fas fa-download {{ $language == 'dh' ? 'pl-1' : 'pr-1' }}"></i>&nbsp;{{ $language == 'dh' ? $item->attributes->title_dh : $item->attributes->title_en }}</span></a>
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