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
@section('archive-title')
{{ $data->title_en }} {{ ' - ' }}
@endsection
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container single-project {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >
      <div class="container-fluid pl-0 pr-0">

        <div class="page-featured-image position-relative" style="background-image: url({{ getMedia($data->image, null) }}); min-height: 350px; background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
          <div class="page-title text-center ">
            <div class="page-title-inner">
              <div class="breadcrumb pb-1">
                <p class="mb-0 d-flex">
                  <a href="/"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ފުރަތަމަ ސަފްހާ' : 'Home' }}</span></a>
                  <span class="lang-{{$language}} visible"><i class="fas fa-chevron-{{ $language == 'dh' ? 'left' : 'right' }}"></i></span>
                  <a href="/{{ $archiveLink }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $archiveTitleDh : $archiveTitleEn }}</span></a>
                </p>
              </div>
                <span class="lang-{{$language}} visible">
                  <h2>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h2>
                </span>
                <div class="single-event-meta">
                  @if(!empty($data->start_date))
                  <span class="event-date single-event-meta-item">
                      <div class="icon">
                        <i class="fa-solid fa-calendar gradient-text"></i>
                      </div>
                      <div class="text">
                        <div class="lang-{{$language}} visible">
                          <span class="label">
                            {{ $language == 'dh' ? 'ފެށޭ ތާރީޚް' : 'START DATE' }}
                          </span>
                          <span class="value text-left">
                            <h6>{{ $language == 'dh' ? ThaanaDate::format('j M Y', Carbon\Carbon::parse($data->start_date)->timestamp) : Carbon\Carbon::parse($data->start_date)->format('d M Y') }}</h6>
                          </span>
                        </div>
                      </div>
                  </span>
                  @endif
                  @if(!empty($data->end_date))
                  <span class="event-date single-event-meta-item">
                      <div class="icon">
                        <i class="fa-solid fa-calendar gradient-text"></i>
                      </div>
                      <div class="text">
                        <div class="lang-{{$language}} visible">
                          <span class="label">
                            {{ $language == 'dh' ? 'ނިމޭ ތާރީޚް' : 'END DATE' }}
                          </span>
                          <span class="value text-left">
                            <h6>{{ $language == 'dh' ? ThaanaDate::format('j M Y', Carbon\Carbon::parse($data->end_date)->timestamp) : Carbon\Carbon::parse($data->end_date)->format('d M Y') }}</h6>
                          </span>
                        </div>
                      </div>
                  </span>
                  @endif
                  @if(!empty($data->project_category))
                  <span class="event-date single-event-meta-item">
                    <div class="icon">
                      <i class="fa-solid fa-tag gradient-text"></i>
                    </div>
                    <div class="text">
                      <div class="lang-{{$language}} visible">
                        <span class="label">
                          {{ $language == 'dh' ? 'ކެޓަގަރީ' : 'CATEGORY' }}
                        </span>
                        <span class="value">
                          <p style="white-space: nowrap;">{{ $language == 'dh' ? $data->project_category->title_dh : $data->project_category->title_en }}</p>        
                        </span>
                      </div>
                    </div>
                  </span>
                  @endif
                  @if(!empty($data->project_status))
                  <span class="event-date single-event-meta-item">
                    <div class="icon">
                      <i class="fa-solid fa-circle-check gradient-text"></i>
                    </div>
                    <div class="text">
                      <div class="lang-{{$language}} visible">
                        <span class="label">
                          {{ $language == 'dh' ? 'ސްޓޭޓަސް' : 'STATUS' }}
                        </span>
                        <span class="value">
                          <p style="white-space: nowrap;">{{ $language == 'dh' ? $data->project_status->title_dh : $data->project_status->title_en }}</p>        
                        </span>
                      </div>
                    </div>
                  </span>
                  @endif
                  @if(!empty($data->project_completion_percentage))
                  <span class="event-date single-event-meta-item">
                    <div class="icon">
                      <i class="fa-solid fa-bars-progress gradient-text"></i>
                    </div>
                    <div class="text">
                        <div class="lang-{{$language}} visible">
                          <span class="label">
                            @if($language == 'dh')
                            ޕްރޮގްރެސް % {{ $data->project_completion_percentage }}
                            @elseif($language == 'en')
                            PROGRESS {{ $data->project_completion_percentage }} %
                            @endif
                          </span>
                        </div>
                        <span class="value pt-2">
                          <div class="project-progress-container {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
                            <div class="project-progress">
                                <div class="progress-bar" style="width: {{ $data->project_completion_percentage }}%;"></div>
                            </div><!--project-progress-->
                          </div><!--project-progress-container-->       
                        </span>
                        
                    </div>
                  </span>
                  @endif
                   
                </div>
                <div class="single-resource-meta">
                  <p class="lang-{{$language}} visible"><i class="far fa-clock"></i><span class="pr-2 pl-2">{{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->created_at)->timestamp ) : Carbon\Carbon::parse($data->created_at)->format('d M Y - H:i') }}</span></p>
                </div>
                <div class="single-under-title d-flex justify-content-center">
                  @php if(function_exists('hashSocialShare')): @endphp
                  {{ hashSocialShare($actual_link, $pageTitle) }}
                  @php endif; @endphp
                </div> <!-- / single-under-title -->
            </div><!-- / page-title-inner -->
            
          </div><!-- / page-title -->
          
        </div>
      </div> <!-- / container-fluid -->
      <div class="container page-content">
        <div class="row">
          <div class="col-12">
              <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="projectTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="details-tab" data-toggle="tab" data-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">
                          <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ތަފްސީލް' : 'Details' }}</span>
                        </button>
                      </li>
                      @if(!empty($data->images || $data->videos))
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery-tab" data-toggle="tab" data-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">
                          <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ގެލެރީ' : 'Gallery' }}</span>
                        </button>
                      </li>
                      @endif
                    </ul>
                    <div class="tab-content" id="projectTabContent">
                      <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <div class="page-text ">
                          <span class="lang-{{$language}} visible">
                            <div class="row">
                              @if($language == 'dh')
                                @foreach (json_decode($data->content_dh) as $item)     
                                  @include('layouts/resource-blocks')
                                @endforeach
                              @elseif($language == 'en')
                                @foreach (json_decode($data->content_en) as $item)     
                                  @include('layouts/resource-blocks')
                                @endforeach
                              @endif
                            </div><!--row-->
                          </span><!--lang-->
                        </div> <!-- / page-text -->
                      </div>
                      @if(!empty($data->images || $data->videos))
                      <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                        <div class="page-text">
                          <div class="row">
                            @if( count($data->videos) >= 1 )
                            <div class="col-lg-12">
                              <div class="row">
                                @foreach($data->videos as $item)
                                <div class="@if(!empty($item['attributes']['column'])) {{'col-lg-'.$item['attributes']['column']}} @endif">
                                  {{-- {{ dd($item) }} --}}
                                  <div class="resourceblock block-container mb-5">
                                    <div class="text-container">
                                      @if(!empty( $item['attributes']['caption_en'] || $item['attributes']['caption_dh'] ))
                                      <div class="lang-{{$language}} visible">
                                        <h6 class="gallery-video-title">{{ $language == 'dh' ? $item['attributes']['caption_dh'] : $item['attributes']['caption_en'] }}</h6>
                                      </div>
                                      @endif
                                      <!DOCTYPE html>
                                      <html>
                                      <head>
                                      </head>
                                      <body>
                                        <div class="responsiveRapper">
                                          <iframe width="" height="315" src="https://www.youtube.com/embed/{{ $item['attributes']['youtube_video_id'] }}"  title="{{$item['attributes']['caption_en']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                      </body>
                                      </html>
                                        
                                    </div><!-- text container -->
                                  </div><!-- / title and text block -->
                                </div><!-- / block columns -->
                                @endforeach
                              </div><!--videos-->
                            </div><!--col-lg-12-->
                            @endif
                            @if( count($data->images) >= 1 )
                            <div class="col-lg-12">
                              <div class="gallery-images">
                                <div class="row">
                                  @foreach ($data->images as $item)
                                    <div class="col-lg-3 pt-3 pb-3">
                                      <a data-fancybox="data" href="{{ getMedia($item, null) }}">
                                        <img src="{{ getMedia($item, 'normal-thumbnail') }}">
                                      </a>
                                    </div>
                                  @endforeach
                                </div><!--row-->
                              </div><!--images-->
                            </div><!--col-lg-12-->
                            @endif
                          </div> <!-- / row -->
                        </div>
                      </div>
                      @endif
                    </div>
                  </div> <!-- / col-lg-12 -->
                  <div class="col-lg-12">
                    <div class="sidebar">
                      <div class="widget">
                        <div class="widget-container">
                          <span class="lang-{{$language}} visible">
                            <h5 class="widget-title text-dark">{{ $language == 'dh' ? 'އެހެން މަޝްރޫއުުތައް' : 'Other Projects' }}</h5>
                          </span>
                          <div class="widget-content">
                            <div class="row">
                              @foreach ($items as $item)
                                @if( $item->id !== $data->id )
                                <!--  CARD ITEM START  -->
                                  <div class="col-lg-4 col-md-6 col-12 project-card">
                                    <a href="{{ route('single-project', $item->id) }}">
                                        <div class="thumbnail zoh">
                                            @php 
                                                if (!empty($item->image)) : 
                                                    $image = getMedia($item->image, 'large-thumbnail');
                                                else :
                                                    $image = getMedia(nova_get_setting('fallback_element_image'), 'large-thumbnail');
                                                endif;
                                            @endphp
                                            <img src="{{ $image }}">
                                            <div class="text">
                                                <div class="text-inner">
                                                    @if(!empty($item->project_status))
                                                      <span class="badge primary lang-{{$language}} visible"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $data->project_status->title_dh : $data->project_status->title_en }}</span>
                                                    @endif
                                                    @if(!empty($item->project_category))
                                                      <span class="badge light lang-{{$language}} visible"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $data->project_category->title_dh : $data->project_category->title_en }}</span>
                                                    @endif
                                                    <div class="title">
                                                      <div class="lang-{{$language}} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
                                                    </div><!--title-->
                                                    <div class="meta">
                                                      <p>
                                                        <i class="far fa-calendar-check fa-lg"></i>
                                                        <span class="lang-{{$language}} visible">{{ $language == 'dh' ? ThaanaDate::format('j M Y', Carbon\Carbon::parse($item->start_date)->timestamp) : Carbon\Carbon::parse($item->start_date)->format('d M Y') }}</span>
                                                      </p>
                                                    </div><!-- / meta -->
                                                </div><!-- / text-inner -->
                                            </div><!--text-->
                                            @if(!empty($item->project_completion_percentage))
                                            <div class="project-progress-container {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
                                                <p>{{ $item->project_completion_percentage }} %</p>
                                                <div class="project-progress">
                                                    <div class="progress-bar" style="width: {{ $item->project_completion_percentage }}%;"></div>
                                                </div><!--project-progress-->
                                            </div><!--project-progress-container-->
                                            @endif
                                        </div>
                                        <!--thumbnail-->
                                    </a>
                                </div>
                                <!--col-lg-6 card-item-->
                                <!--  CARD ITEM END  -->
                                @endif
                              @endforeach

                            </div><!--row-->
                            
                          </div>
                        </div>
                      </div>
                      <!--Sidebar widgets here-->
                      {{-- <span class="lang-en">   
                        <x-sidebar-component :data="$sidebar->content_en"/>
                      </span><!--lang-en-->
                      <span class="lang-dh">   
                        <x-sidebar-component :data="$sidebar->content_dh"/>
                      </span><!--lang-dh--> --}}
                      
                    </div>
                    
                  </div> <!-- / col-lg-4 -->
              </div> <!--row-->
          </div> <!-- / col-12 -->       
        </div> <!-- / row -->
    </div><!-- / container -->
    </div> <!-- / page-container -->
    @push('scripts')
    <script>
      function parallaxInit() {
          $(document).ready(function() {
              // Populate images from data attributes.
              var scrolled = $(window).scrollTop()
              $('.parallax').each(function(index) {
                  var imageSrc = $(this).data('image-src')
                  var imageHeight = $(this).data('height')
                  $(this).css('background-image', 'url(' + imageSrc + ')')
                  $(this).css('height', imageHeight)
                  var initY = $(this).offset().top
                  var height = $(this).height()
                  var diff = scrolled - initY
                  var ratio = Math.round((diff / height) * 100)
                  $(this).css('background-position', 'center ' + parseInt(-(ratio * 0.4)) + 'px')
              })
              $(window).scroll(function() {
                  var scrolled = $(window).scrollTop()
                  $('.parallax').each(function(index, element) {
                      var initY = $(this).offset().top
                      var height = $(this).height()
                      var endY = initY + $(this).height()
                      var visible = isInViewport(this)
                      if (visible) {
                          var diff = scrolled - initY
                          var ratio = Math.round((diff / height) * 100)
                          $(this).css('background-position', 'center ' + parseInt(-(ratio * 0.4)) + 'px')
                      }
                  })
              })
          });
      }
      function isInViewport(node) {
          var rect = node.getBoundingClientRect()
          return (
              (rect.height > 0 || rect.width > 0) &&
              rect.bottom >= 0 &&
              rect.right >= 0 &&
              rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
              rect.left <= (window.innerWidth || document.documentElement.clientWidth)
          )
      }
      parallaxInit();
    </script>
    <script>
        window.addEventListener('languageEventDispatch', event => {
            parallaxInit();
        });
    </script>
@endpush