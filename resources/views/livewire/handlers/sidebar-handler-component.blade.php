@props(['data'])                                                
    @foreach ( json_decode($data) as $item)
        @switch($item->layout)
            @case('richtextwidget')
                <div class="widget">
                <div class="widget-container">
                    <h5 class="widget-title with-bg ">
                    {{ $item->attributes->title }}
                    </h5>
                    <div class="widget-content">
                    {!! $item->attributes->content !!} 
                    </div>
                </div>
                </div>
            @break
            @case('spacerlayout')
                <div style="height: {{$item->attributes->height}}px;" class="block-container spacer-block"></div>
            @break
            @case('imagewidget')
                @php 
                    if(!empty($item->attributes->external_link)) :
                        $external_link_status = $item->attributes->external_link;
                    else : 
                        $external_link_status = 0;
                    endif;
                    if($external_link_status == 1) :
                        $url = $item->attributes->url;
                    else : 
                        $url = env('APP_URL'). '/' .$item->attributes->url;
                    endif;
                @endphp
                <div class="widget">
                    <div class="widget-container">
                        <h5 class="widget-title with-bg ">
                            {{ $item->attributes->title }}
                        </h5>
                        <div class="widget-content">
                            @if (!empty($item->attributes->url))
                                @php 
                                    if( $item->attributes->target == 1 ) :
                                        $target = 'target=_blank';
                                    else : 
                                        $target = 'target=_self';
                                    endif;
                                @endphp
                                <a {{ $target }} href="{{ $url }}">
                                    <img src="{{ getMedia($item->attributes->image, null) }}">
                                </a>
                            @else
                                <img src="{{ getMedia($item->attributes->image, null) }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            @break
            @case('contactdetailswidget')
                <div class="widget contactcard block-container mb-5 ">
                <div class="widget-container">
                    <h5 class="widget-title with-bg ">
                    {{ $item->attributes->title }}
                    </h5>
                    <div class="widget-content">
                        @if( !empty($item->attributes->address) )
                            <p class="item d-flex"><i class="fas fa-home mt-2"></i>&nbsp;<span>{{ $item->attributes->address }}</span></p>
                        @endif
                        @if( !empty($item->attributes->phone) )
                            <p class="item"><i class="fas fa-phone"></i>&nbsp;{{ $item->attributes->phone }}</p>
                        @endif
                        @if( !empty($item->attributes->hotline) )
                            <p class="item"><i class="fas fa-mobile-alt"></i>&nbsp;{{ $item->attributes->hotline }}</p>
                        @endif
                        @if( !empty($item->attributes->fax) )
                            <p class="item"><i class="fas fa-fax"></i>&nbsp;{{ $item->attributes->fax }}</p>
                        @endif
                        @if( !empty($item->attributes->email) )
                            <p class="item"><i class="fas fa-envelope"></i>&nbsp;{{ $item->attributes->email }}</p>
                        @endif
                    </div>
                </div>
                
                </div>
            @break
            @case('facebookfeedwidget')
                <div class="widget">
                    <div class="widget-container">
                        <h5 class="widget-title with-bg ">
                        {{ $item->attributes->title }}
                        </h5>
                        <div class="widget-content">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="XiNuzJWr"></script>
                            <div class="fb-page pt-3" data-href="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><blockquote cite="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/">{{ $item->attributes->facebook_handler }}</a></blockquote></div>
                        </div>
                    </div>
                </div>
            @break
            @case('socialiconswidget')
                <div class="widget">
                    <div class="widget-container">
                        <h5 class="widget-title with-bg ">
                        {{ $item->attributes->title }}
                        </h5>
                        <div class="widget-content">
                            <div class="social-icons">
                                @if (!empty(nova_get_setting('org_phone')))
                                    <a class="social-icon colored" href="tel:{{ nova_get_setting('org_phone') }}">
                                        <i class="fas fa-phone fa-flip-horizontal"></i>
                                    </a>
                                @endif
                                @if (!empty(nova_get_setting('org_email')))
                                    <a class="social-icon colored" href="mailto:{{ nova_get_setting('org_email') }}">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                @endif
                                @if (!empty(nova_get_setting('facebook_handler')))
                                    <a class="social-icon colored" target="_blank" href="https://www.facebook.com/{{ nova_get_setting('facebook_handler') }}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif
                                @if (!empty(nova_get_setting('twitter_handler')))
                                    <a class="social-icon colored" target="_blank" href="https://www.twitter.com/{{ nova_get_setting('twitter_handler') }}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                                @if (!empty(nova_get_setting('instagram_handler')))
                                    <a class="social-icon colored" target="_blank" href="https://www.instagram.com/{{ nova_get_setting('instagram_handler') }}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                                @if (!empty(nova_get_setting('linkedin_handler')))
                                    <a class="social-icon colored" target="_blank" href="https://www.linkedin.com/company/{{ nova_get_setting('linkedin_handler') }}">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                @endif
                                @if (!empty(nova_get_setting('youtube_handler')))
                                    <a class="social-icon colored" target="_blank" href="https://www.youtube.com/user/{{ nova_get_setting('youtube_handler') }}">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @break
            @case('locationwidget')
                <div class="widget">
                <div class="widget-container">
                    <h5 class="widget-title with-bg ">
                    {{ $item->attributes->title }}
                    </h5>
                    <div class="widget-content">
                        @php 
                            if(!empty($item->attributes->map_id) ) {
                                $mapData = getMap($item->attributes->map_id);
                            }
                        @endphp
                        <div style="height: 220px;" id="widget-map"></div>
                        @push('scripts')
                            @if(!empty( $item->attributes->map_id ))
                            <script type="text/javascript">
                            function initialize() {
                                var options = {
                                    zoom: {{ $mapData->zoom ? $mapData->zoom : '15' }},
                                    center: { lat: @php echo $mapData->latitude; @endphp, lng: @php echo $mapData->longitude; @endphp }
                                };
                                var map = new google.maps.Map(document.getElementById('widget-map'), options);
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
                        @endpush
                    </div>
                </div>
                
                </div>
            @break
            @case('containerwidget')
                <div class="widget">
                    <div class="widget-container">
                        <h5 class="widget-title with-bg">
                        {{ $item->attributes->title }}
                        </h5>
                        <div class="widget-content">
                        <div class="row">
                            @foreach ($item->attributes->section_elements as $item)
                                @include('layouts/widget-layouts/widget-blocks')
                            @endforeach
                        </div><!--row-->
                        </div>
                    </div>
                </div>
            @break
        @endswitch
    @endforeach