@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($data->title_en)) : 
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    else:
      $pageTitle = nova_get_setting('og_site_name');
    endif;
    $eventDay = date("dS M Y", strtotime($data->startdate));  
    $eventStartTime = date("H:i", strtotime($data->startdate));  
    $eventEndTime = date("H:i", strtotime($data->enddate)); 

    $dteStart = new DateTime($data->startdate);
    $dteEnd   = new DateTime($data->enddate); 

    $todayDate = date('Y-m-d h:i:s');

    if($todayDate >= $data->startdate){
        $active = "inactive";
    } else {
        $active = "active";
    }

    $timeDiff = $dteStart->diff($dteEnd);
    $eventDuration = $timeDiff->format("%H:%I"); 

    if( $eventDuration == '01:00' ) {
      $labelEn = 'Hour';
      $labelDh = 'ގަޑިއިރު';
    }
    elseif( $eventDuration < '01:00' ) {
      $labelEn = 'Minutes';
      $labelDh = 'މިނިޓް';
      $eventDuration = $timeDiff->format("%I"); 
    } else {
      $labelEn = 'Hours';
      $labelDh = 'ގަޑިއިރު';
    }
@endphp
@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
@section('archive-title')
{{ $data->title_en }} {{ ' - ' }}
@endsection
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container single-event {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >
      <div class="container-fluid pl-0 pr-0">

        <div class="page-featured-image position-relative parallax" data-height="350px" data-image-src="{{ getMedia($data->image, null) }}">
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
                <span class="event-date single-event-meta-item">
                  <div class="icon">
                      <i class="fas fa-stopwatch gradient-text"></i>
                  </div>
                  <div class="text">
                    <div class="lang-{{$language}} visible">
                      <span class="label">
                        {{ $language == 'dh' ? 'ގަޑިއާއި ވަގުތު' : 'DATE & TIME' }}
                      </span>
                      <span class="value text-{{ $language == 'dh' ? 'right' : 'left' }}">
                        @if($language == 'dh')
                          <h6>{{ ThaanaDate::format('j M Y', Carbon\Carbon::parse($data->startdate)->timestamp) }} | {{ ThaanaDate::format('H:i', Carbon\Carbon::parse($data->startdate)->timestamp ) }} - {{ ThaanaDate::format('H:i', Carbon\Carbon::parse($data->enddate)->timestamp ) }}</h6>
                        @elseif($language == 'en')
                          <h6>{{$eventDay}} | {{$eventStartTime}} - {{$eventEndTime}}</h6>
                        @endif
                      </span>
                    </div>
                  </div>
                </span>
                <span class="event-date single-event-meta-item">
                  <div class="icon">
                  <i class="fas fa-history gradient-text"></i>
                  </div>
                  <div class="text">
                    <div class="lang-{{$language}} visible">
                      <span class="label {{ $language == 'dh' ? 'text-dhivehi' : '' }}">
                        {{ $language == 'dh' ? 'ވަގުތު' : 'DURATION' }}
                      </span>
                      <span class="value {{ $language == 'dh' ? 'text-dhivehi' : '' }}">
                        <h6>{{$eventDuration}} {{ $language == 'dh' ? $labelDh : $labelEn }}</h6>        
                      </span>
                    </div>
                  </div>
                </span>
                <span class="event-date single-event-meta-item">
                  <div class="icon">
                    <i class="fas fa-map-marker-alt gradient-text"></i>
                  </div>
                  <div class="text">
                    <div class="lang-{{$language}} visible">
                      <span class="label">
                        {{ $language == 'dh' ? 'ތަން' : 'VENUE' }}
                      </span>
                      <span class="value">
                        <p style="white-space: nowrap;">{{ $language == 'dh' ? $data->venue_dh : $data->venue_en }}</p>        
                      </span>
                    </div>
                  </div>
                </span>
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
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="page-text">
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
          </div> <!-- / col-lg-8 -->
          <div class="col-lg-4">
            <div class="sidebar">
              @if ($items->count() > 0)
                <div class="widget">
                  <div class="widget-container">
                    <div class="lang-{{ $language }} visible"><h5 class="widget-title with-bg">{{ $language == 'dh' ? 'އިތުރު ލިޔުންތައް' : 'Other Articles' }}</h5></div>
                    <div class="widget-content">
                      
                      <div class="row">
                        
                        @foreach ($items->slice(0, 5) as $item)

                          @if( $item->id !== $data->id )
                            
                          @php
                              $todayDate = date('Y-m-d h:i:s');

                              $eventDay = Carbon\Carbon::parse($item->startdate)->translatedFormat('dS M');

                              $eventStartTime = Carbon\Carbon::parse($item->startdate)->translatedFormat('H:i');
                              $eventEndTime = Carbon\Carbon::parse($item->enddate)->translatedFormat('H:i');
                              
                              if($todayDate >= $item->startdate){
                                  $active = "inactive";
                              } else {
                                  $active = "active";
                              }
                          @endphp
                          <!--  CARD ITEM START  -->
                          <div class="col-lg-12 col-md-4 col-md-6 col-12 event-card">
                              <a href="{{ route($resourceRoute, $item->id) }}">
                                  <div class="thumbnail zoh">
                                      @php 
                                          if (!empty($item->image)) : 
                                              $image = getMedia($item->image, 'large-thumbnail');
                                          else :
                                              $image = getMedia(nova_get_setting('fallback_element_image'), 'large-thumbnail');
                                          endif;
                                      @endphp
                                      <img src="{{ $image }}">
                                      <div class="active-status {{ $active }}"></div>
                                      <div class="meta">
                                          <div class="meta-inner">
                                            <p>
                                              <i class="far fa-calendar-check fa-lg"></i>
                                              <span class="lang-{{ $language }} visible">
                                                {{ $eventDay }} | {{ $eventStartTime }} - {{ $eventEndTime }}
                                              </span>
                                            </p>
                                            <div class="lang-{{ $language }} visible"><p><i class="fas fa-map-marker-alt fa-lg"></i> {{ $language == 'dh' ? $item->venue_dh : $item->venue_en }}</p></div>
                                          </div>
                                      </div><!-- / meta -->
                                  </div>
                                  <!--thumbnail-->
                                  <div class="text">
                                      <div class="title">
                                          <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
                                      </div><!--title-->
                                  </div><!--text-->
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
              @endif
              <!--Sidebar widgets here-->
              {{-- <x-sidebar-component :data="$side_bar->content"/> --}}
              
            </div>
            
          </div> <!-- / col-lg-4 -->
        </div> <!-- / row -->
      </div><!-- / container -->
    </div><!-- / page-container -->
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