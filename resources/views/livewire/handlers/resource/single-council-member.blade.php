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
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container item-detailed-view single-member {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >
      <div class="container-fluid pl-0 pr-0">
        <div class="single-member-featured-image position-relative parallax" data-height="500px" data-image-src="{{ getMedia(nova_get_setting('single_council_member_cover_image'), null) }}">
            <div class="member-profile-head" style="background-image: linear-gradient(to top, {{ $data->political_party->color }}, rgba(0, 0, 0, 0));">
              <div class="container"> 
                <div class="row align-items-center justify-content-center">
                  <div class="col logo-container">
                    <div class="logo">
                      @php 
                        if (!empty($data->image)) : 
                            $image = getMedia($data->image, null);
                        else :
                            $image = getMedia(nova_get_setting('fallback_user_image'), null);
                        endif;
                      @endphp
                      <img src="{{ $image }}" alt="">
                    </div>
                  </div>
                  <div class="col details-container">
                    <div class="details  pt-4 {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
                      <div class="political-party-badge" style="background-color: {{ $data->political_party->color }};">
                        <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $data->political_party->title_dh : $data->political_party->title_en }}</span>
                      </div>
                      <div class="social-icons">
                          @if (!empty($data->phone))
                              <a class="social-icon colored" href="tel:{{ $data->phone }}">
                                  <i class="fas fa-phone"></i>
                              </a>
                          @endif
                          @if (!empty($data->email))
                              <a class="social-icon colored" href="mailto:{{ $data->email }}">
                                  <i class="fas fa-envelope"></i>
                              </a>
                          @endif
                          @if (!empty($data->facebook_handler))
                              <a class="social-icon colored" target="_blank" href="https://www.facebook.com/{{ $data->facebook_handler }}">
                                  <i class="fab fa-facebook-f"></i>
                              </a>
                          @endif
                          @if (!empty($data->twitter_handler))
                              <a class="social-icon colored" target="_blank" href="https://www.twitter.com/{{ $data->twitter_handler }}">
                                  <i class="fab fa-twitter"></i>
                              </a>
                          @endif
                          @if (!empty($data->instagram_handler))
                              <a class="social-icon colored" target="_blank" href="https://www.instagram.com/{{ $data->instagram_handler }}">
                                  <i class="fab fa-instagram"></i>
                              </a>
                          @endif
                          @if (!empty($data->linkedin_handler))
                              <a class="social-icon colored" target="_blank" href="https://www.linkedin.com/in/{{ $data->linkedin_handler }}">
                                  <i class="fab fa-linkedin-in"></i>
                              </a>
                          @endif
                          @if (!empty($data->youtube_handler))
                              <a class="social-icon colored" target="_blank" href="https://www.youtube.com/user/{{ $data->youtube_handler }}">
                                  <i class="fab fa-youtube"></i>
                              </a>
                          @endif
                      </div><!-- / social-icons -->
                      <div class="wrapper">
                        <div class="row">
                          <div class="col-lg-12">
                            <span class="lang-{{$language}} visible"><h3 class="title">{{ $language == 'dh' ? $data->name_dh : $data->name_en }}</h3></span>
                          </div><!-- / col-lg-12 -->
                          <div class="col-lg-12">
                            <div class="service-details">
                              <div class="service-item">
                                @foreach($data->council_terms as $term)
                                  @if(!empty( $term->title_en && $term->title_dh && $term->pivot->position_en && $term->pivot->position_dh ))
                                    <div class="lang-{{$language}} visible"><h6>{{ $language == 'dh' ? $term->pivot->position_dh : $term->pivot->position_en }}<span> - {{ $language == 'dh' ? $term->title_dh : $term->title_en }}</span></h6></div>
                                  @endif
                                @endforeach
                              </div>
                            </div>
                            @if( !empty($data->address_en && $data->address_dh) )
                                <span class="lang-{{$language}} visible"><p class="item"><i class="fas fa-home"></i>{{ $language == 'dh' ? $data->address_dh : $data->address_en }}</p></span>
                            @endif
                            @if( !empty($data->phone) )
                              <p class="item d-flex align-items-center">
                                <span>
                                  <span class="lang-{{$language}} visible">
                                    <i class="fas fa-phone {{ $language == 'dh' ? 'fa-flip-horizontal' : '' }}"></i>
                                  </span>
                                </span>
                                <a href="tel:{{ $data->phone }}">{{ $data->phone }}</a>
                              </p>
                            @endif
                            @if( !empty($data->email) )
                                <p class="item"><i class="fas fa-envelope"></i><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></p>
                            @endif
    
                          </div><!-- / col-lg-12 -->
                        </div>
                        
                      </div>
                    </div><!-- / details -->
                  </div><!-- / col-lg-8 -->
                </div>
              </div><!-- / container -->
              
            </div><!-- / member-profile-head -->
            <div class="breadcrumb pb-1">
              <p class="mb-0 d-flex">
                <a href="/"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ފުރަތަމަ ސަފްހާ' : 'Home' }}</span></a>
                <span class="lang-{{$language}} visible"><i class="fas fa-chevron-{{ $language == 'dh' ? 'left' : 'right' }}"></i></span>
                <a href="/{{ $archiveLink }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $archiveTitleDh : $archiveTitleEn }}</span></a>
              </p>
            </div>
        </div>

      </div> <!-- / container-fluid -->
      <div class="container page-content">
        @if(!empty($data->short_description_en || $data->short_description_dh ))
          <div class="page-text">
              <span class="lang-{{$language}} visible">
                {!! $language == 'dh' ? $data->short_description_dh : $data->short_description_en !!}
              </span><!--lang-en-->
          </div>
        @endif
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