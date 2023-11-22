@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($data->title_en)) : 
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    else:
      $pageTitle = nova_get_setting('og_site_name');
    endif;
    if($data->type == 'image') {
      $icon = '<i class="fas fa-camera"></i>';
    } elseif($data->type == 'video') {
      $icon = '<i class="fas fa-video"></i>';
    } elseif($data->type == 'photovideo') {
      $icon = '<i class="fas fa-photo-video"></i>';
    } else {
      $icon = '<i class="fas fa-camera pl-2"></i>';
    }
    if(!isset($data->images)) {
      $data->images = [];
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
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container single-gallery dark {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >
      <div class="container-fluid pl-0 pr-0">

        <div class="page-featured-image position-relative" style="background-image: url({{ getMedia($data->image, null) }}); min-height: 350px; background-attachment: fixed;">
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
                  <h2>{!! $icon !!}&nbsp;{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h2>
                </span>
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
        @if(!empty($data->content_en || $data->content_dh ))
        <div class="page-text ">
          <div class="content pb-4">
            <div class="lang-{{$language}} visible">{!! $language == 'dh' ? $data->content_dh : $data->content_en !!}</div>
          </div>
        </div> <!-- / page-text -->
        @endif
        <div class="row">
          @if( count($data->videos) >= 1 )
          <div class="col-lg-12">
            <div class="row">
              @foreach($data->videos as $item)
              <div class="@if(!empty($item['attributes']['column'])) {{'col-lg-'.$item['attributes']['column']}} @endif">
                {{-- {{ dd($item) }} --}}
                <div class="resourceblock block-container mb-5 ">
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
                  <div class="col-lg-3 pt-3 pb-3 ">
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