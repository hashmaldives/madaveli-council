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
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >
      @if(!empty($data->image))
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
                  <span class="lang-{{$language}} visible"><h2>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h2></span>
                  <div class="single-under-title d-flex justify-content-center">
                    {{ hashSocialShare($actual_link, $pageTitle) }}
                  </div> <!-- / single-under-title -->
                </div><!-- / page-title-inner -->
              </div><!-- / page-title -->
            </div>
        </div> <!-- / container-fluid -->
        <div class="page-content">
        @endif
        @if(empty($data->image))
        <div class="page-content no-image">
          <div class="container">
            <div class="page-title ">
              <div class="page-title-inner">
                <div class="breadcrumb pb-1">
                  <p class="mb-0 d-flex">
                    <a href="/"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ފުރަތަމަ ސަފްހާ' : 'Home' }}</span></a>
                    <span class="lang-{{$language}} visible"><i class="fas fa-chevron-{{ $language == 'dh' ? 'left' : 'right' }}"></i></span>
                    <a href="/{{ $archiveLink }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $archiveTitleDh : $archiveTitleEn }}</span></a>
                  </p>
                </div>
                <span class="lang-{{$language}} visible"><h2>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h2></span>
                <div class="single-under-title d-flex">
                  {{ hashSocialShare($actual_link, $pageTitle) }}
                </div> <!-- / single-under-title -->
              </div><!-- / page-title-inner -->
            </div><!-- / page-title -->
          </div> <!-- / container -->
        @endif
        <div class="page-meta">
          <div class="container">
            <div class="page-meta">
              <div class="section-title lang-{{ $language }} visible">
                <h6>{{ $language == 'dh' ? 'ބާވަތާއި ކެޓަގަރީ' : 'Types & Categories' }}</h6>
              </div>
              <div class="categories d-flex">
                @foreach($data->business_category as $category)
                <div class="lang-{{ $language }} visible">
                  <span class="resource-tag-page"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $category->title_dh : $category->title_en }}</span>
                </div>
                @endforeach
                @foreach($data->business_type as $type)
                <div class="lang-{{ $language }} visible">
                  <span class="resource-tag-page"><i class="fa-solid fa-building"></i>&nbsp;{{ $language == 'dh' ? $type->title_dh : $type->title_en }}</span>
                </div>
                @endforeach
              </div>
            </div>
          </div><!--container-->
        </div>
        @if(!empty($data->content_dh || $data->content_en))
          <div class="lang-{{$language}} visible">
            @if($language == 'dh')
              @foreach (json_decode($data->content_dh) as $item)
                @include('layouts/page-section')
              @endforeach
            @elseif($language == 'en')
              @foreach (json_decode($data->content_en) as $item)
                @include('layouts/page-section')
              @endforeach
            @endif
          </div>
        @endif
      </div><!-- / page-content -->
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