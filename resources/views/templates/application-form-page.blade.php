@php
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if(!empty($page->title_en)) : 
      $pageTitle = $page->title_en . ' - ' . nova_get_setting('og_site_name');
  else:
    $pageTitle = nova_get_setting('og_site_name');
  endif;
@endphp

    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container pt-0 {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;">
        @if(!empty($page->image))
        <div class="container-fluid pl-0 pr-0">
            <div class="page-featured-image position-relative parallax" data-height="350px" data-image-src="{{ getMedia($page->image, null) }}">
              <div class="page-title text-center ">
                <div class="page-title-inner">
                  <span class="lang-{{$language}} visible"><h2>{{ $language == 'dh' ? $page->title_dh : $page->title_en }}</h2></span>
                  <div class="single-under-title d-flex justify-content-center">
                    {{ hashSocialShare($actual_link, $pageTitle) }}
                  </div> <!-- / single-under-title -->
                </div><!-- / page-title-inner -->
              </div><!-- / page-title -->
            </div>
        </div> <!-- / container-fluid -->
        @endif
        <div class="page-content no-image">
          @if(empty($page->image))
            <div class="container">
              <div class="page-title ">
                <div class="page-title-inner">
                  <span class="lang-{{$language}} visible"><h2>{{ $language == 'dh' ? $page->title_dh : $page->title_en }}</h2></span>
                  <div class="single-under-title d-flex">
                    {{ hashSocialShare($actual_link, $pageTitle) }}
                  </div> <!-- / single-under-title -->
                </div><!-- / page-title-inner -->
              </div><!-- / page-title -->
            </div> <!-- / container -->
          @endif
          @if(!empty($page->content_dh || $page->content_en))
            <div class="lang-{{$language}} visible">
              @if($language == 'dh')
                @foreach (json_decode($page->content_dh) as $item)
                  @include('layouts/page-section')
                @endforeach
              @elseif($language == 'en')
                @foreach (json_decode($page->content_en) as $item)
                  @include('layouts/page-section')
                @endforeach
              @endif
            </div>
          @endif
        </div><!-- / page-content -->
        <div class="page-content">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="block-container  form-container pb-5">
                  @livewire('forms.application-form-component')
                </div>
              </div>
            </div>
          </div><!-- / container -->
        </div><!-- / page-content -->
    </div> <!-- / page-container -->   