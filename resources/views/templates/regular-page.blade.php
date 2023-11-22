@php
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if(!empty($page->title_en)) : 
      $pageTitle = $page->title_en . ' - ' . nova_get_setting('og_site_name');
  else:
    $pageTitle = nova_get_setting('og_site_name');
  endif;
  if(!empty($page->map_id) && $page->maps == 1 ) {
    $mapData = getMap($page->map_id);
  }
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
        <div class="page-content">
        @endif
        @if(empty($page->image))
        <div class="page-content no-image">
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
        @if(!empty( $page->maps == 1 && $mapData->latitude && $mapData->longitude ))
        <div style="width: 100%;" class="map-container">
          <div class="row">
            <div class="col-lg-12">
              @if(!empty( $mapData->latitude && $mapData->longitude ))
              <div style="height: {{ $mapData->height ? $mapData->height : '500' }}px; width: 100%;" class="location-map" id="hash-map"></div>
              @endif
            </div>
          </div>
        </div><!-- / map-container-->  
        @endif
    </div> <!-- / page-container -->   
@push('scripts')
    @if(!empty( $page->maps == 1 && $mapData->latitude && $mapData->longitude ))
    <script type="text/javascript">
      function initialize() {
          var options = {
              zoom: {{ $mapData->zoom ? $mapData->zoom : '15' }},
              center: { lat: @php echo $mapData->latitude; @endphp, lng: @php echo $mapData->longitude; @endphp }
          };
          var map = new google.maps.Map(document.getElementById('hash-map'), options);
          var markers = [
              {
                  coords: {lat: @php echo $mapData->latitude; @endphp, lng: @php echo $mapData->longitude; @endphp },
              },
          ];
          for (var i = 0; i < markers.length; i++) {
              //Add marker
              addMarker(markers[i]);
          }
          function addMarker(props) {
              var marker = new google.maps.Marker({
                  map: map,
                  position: props.coords,
                  //icon: props.iconImage
              });
              //Check for custom icon
              if (props.iconImage) {
                  //Set icon image
                  marker.setIcon(props.iconImage);
              }
              if (props.content) {
                  var infoWindow = new google.maps.InfoWindow({
                      content: props.content
                  });
                  marker.addListener('click', function () {
                      infoWindow.open(map, marker);
                  });
              }
          }
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ nova_get_setting('google_maps_api_key') }}&callback=initialize" async defer></script>
    <script>
      window.addEventListener('languageEventDispatch', event => {
          initialize();
      });
    </script>
    @endif
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