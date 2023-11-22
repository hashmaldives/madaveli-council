    @if( !empty($item->container) && $item->container  == 1 )
        @php $container = '1'; @endphp
    @else
        @php $container = ''; @endphp
    @endif

    @php 
        if(!empty($item->padding_top)) :
            $paddingTop = 'padding-top:' . $item->padding_top . 'px; ';
        else :
            $paddingTop = '';
        endif;
        if(!empty($item->padding_bottom)) :
            $paddingBottom = 'padding-bottom:' . $item->padding_bottom . 'px; ';
        else :
            $paddingBottom = 'padding-bottom: 0px;';
        endif;
        if(!empty($item->section_height)) {
            $height = 'height:' . $item->section_height . 'px; ';
        }
        else {
            $height = '';
        }
        $mapData = getMap($item->map_id);
    @endphp
    
    @if ( @$item->parallax  == 1 && !empty( $item->background_image ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }} {{ $height }}" data-height="{{ $item->section_height }}px" class="page-section home-page-section set-height with-background position-relative parallax d-flex align-items-center justify-content-center {{ $item->text_color  }}" data-image-src="{{ getMedia($item->background_image, null) }}">
    @elseif ( @$item->parallax  == 1 && !empty( $item->background_image  ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }}  {{ $height }}" class="page-section home-page-section with-background position-relative parallax {{ $item->text_color  }}" data-image-src="{{ getMedia($item->background_image, null) }}">
    @elseif ( @$item->parallax  !== 1 && !empty( $item->background_image  ) )
        <div class="page-section home-page-section with-background {{ $item->text_color  }}" style="background-image: url({{ getMedia($item->background_image, null) }}); background-attachment: fixed; background-size: cover; {{ $paddingTop }}{{ $paddingBottom }}  {{ $height }}">
    @elseif ( !empty( $item->background_color  ) && empty( $item->background_image  ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }} background-color: {{ $item->background_color  }};  {{ $height }}" class="page-section {{ $item->text_color  }}">
    @else
        <div style="{{ $paddingTop }}{{ $paddingBottom }}  {{ $height }}" class="page-section home-page-section {{ $item->text_color  }}">
    @endif

        @if ( $container == 1 )
            <div class="container">
        @endif

        <div style="width: 100%;" class="map-container">
            @if(!empty( $mapData->latitude && $mapData->longitude ))
            <div style="height: {{ $mapData->height ? $mapData->height : '500' }}px; width: 100%;" class="location-map" id="hash-map"></div>
            @endif
        </div>
        
        @if ( $container == 1 )
            </div><!--container-->
        @endif

    </div><!-- / dynamic-page-section -->

    @push('scripts')
    @if(!empty( $mapData->latitude && $mapData->longitude ))
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
                addMarker(markers[i]);
            }
            function addMarker(props) {
                var marker = new google.maps.Marker({
                    map: map,
                    position: props.coords,
                });
                if (props.iconImage) {
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
    @endpush