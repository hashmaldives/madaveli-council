
@switch($item->layout)

    @case('richtextwidget')
        <div class="widget light ">
        <div class="widget-container">
            <h5 class="widget-title ">
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
    @case('infoboxlayout')
        <div class="block-container mb-3 ">
            @if(!empty($item->attributes->title))
                <h5 class="item-title">
                {{ $item->attributes->title }}
                </h5>
            @endif
            <div class="mt-2 info-box {{ $item->attributes->type }} alert alert-{{ $item->attributes->type }}" role="alert">
                <div class="icon-container">
                    <i class="{{ $item->attributes->icon }}"></i>
                </div>
                <div class="text-container">
                    {!! $item->attributes->content !!}
                </div>
            </div>
        </div>
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
        <div class="widget light ">
            <div class="widget-container">
                <h5 class="widget-title ">
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
        <div class="widget light contactcard block-container mb-5 ">
        <div class="widget-container">
            <h5 class="widget-title ">
            {{ $item->attributes->title }}
            </h5>
            <div class="widget-content">
                @if( !empty($item->attributes->address) )
                    <p class="item d-flex"><i class="fas fa-home mt-2"></i>&nbsp;<span class="text-dhivehi">{{ $item->attributes->address }}</span></p>
                @endif
                @if( !empty($item->attributes->phone) )
                    <p class="item text-english fw-400"><i class="fas fa-phone fa-flip-horizontal"></i>&nbsp;<span>{{ $item->attributes->phone }}</span></p>
                @endif
                @if( !empty($item->attributes->hotline) )
                    <p class="item text-english fw-400"><i class="fas fa-mobile-alt"></i>&nbsp;<span>{{ $item->attributes->hotline }}</span></p>
                @endif
                @if( !empty($item->attributes->fax) )
                    <p class="item text-english fw-400"><i class="fas fa-fax"></i>&nbsp;<span>{{ $item->attributes->fax }}</span></p>
                @endif
                @if( !empty($item->attributes->email) )
                <p class="item text-english fw-400"><i class="fas fa-envelope"></i>&nbsp;<span>{{ $item->attributes->email }}</span></p>
                @endif
            </div>
        </div>
        
        </div>
    @break
    @case('facebookfeedwidget')
        <div class="widget light ">
        <div class="widget-container">
            <h5 class="widget-title ">
            {{ $item->attributes->title }}
            </h5>
            <div class="widget-content">
            <div class="fb-page pt-3" data-href="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/">{{ $item->attributes->facebook_handler }}</a></blockquote></div>
            </div>
        </div>
        
        </div>
    @break
    @case('socialiconswidget')
        <div class="widget light ">
            <div class="widget-container">
                <h5 class="widget-title ">
                {{ $item->attributes->title }}
                </h5>
                <div class="widget-content">
                    <div class="social-icons">
                        @if (!empty(nova_get_setting('org_phone')))
                            <a class="social-icon colored" href="tel:{{ nova_get_setting('org_phone') }}">
                                <i class="fas fa-phone"></i>
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
                        @if (!empty(nova_get_setting('viber_community_link')))
                            <a class="social-icon colored" target="_blank" href="{{ nova_get_setting('viber_community_link') }}">
                                <i class="fab fa-viber"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @break
    @case('locationwidget')
        <div class="widget light ">
        <div class="widget-container">
            <h5 class="widget-title ">
            {{ $item->attributes->title }}
            </h5>
            <div class="widget-content">
                <div style="height: 250px;" id="widget-map"></div>
                <script type="text/javascript">

                    function initialize() {
                        //Map options
                        var options = {
                            zoom: 17,
                            center: {lat: {{ $item->attributes->location->latitude ? $item->attributes->location->latitude : 4.174202370812952 }}, lng: {{ $item->attributes->location->longitude ? $item->attributes->location->longitude : 4.174202370812952 }}},
                            styles: [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"saturation":20},{"lightness":50},{"gamma":0.4},{"hue":"#00ffee"}]},{"featureType":"all","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"simplified"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#405769"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#232f3a"}]}]
                        };
            
                        //New Map
                        var map = new google.maps.Map(document.getElementById('widget-map'), options);
            
                        //Array of markers
                        var markers = [
                            {
                                coords: {lat: {{ $item->attributes->location->latitude ? $item->attributes->location->latitude : 4.174202370812952 }}, lng: {{ $item->attributes->location->longitude ? $item->attributes->location->longitude : 4.174202370812952 }}},
            
                            },
                        ];
            
                        //Loop through markers
                        for (var i = 0; i < markers.length; i++) {
                            //Add marker
                            addMarker(markers[i]);
                        }
            
                        //Add Marker Function
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
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnZQbJTMLMt8NN9S7aATlcb5o_O-A22h4&callback=initialize" async defer></script>
            </div>
        </div>
        
        </div>
    @break
    @case('youtubevideo')
        <div class="widget light ">
            <div class="widget-container">
                @if(!empty($item->attributes->title))
                <h5 class="widget-title ">
                {{ $item->attributes->title }}
                </h5>
                @endif
                <div class="widget-content">
                    <!DOCTYPE html>
                    <html>
                    <head>
                    </head>
                    <body>
                    <div class="responsiveRapper">
                        <iframe width="" height="315" src="https://www.youtube.com/embed/{{ $item->attributes->youtube_video_id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    </body>
                    </html>
                </div>
            </div>
        
        </div><!--/ widget light -->
    @break
    @case('video')
        <div class="widget light ">
            <div class="widget-container">
                @if(!empty($item->attributes->title))
                <h5 class="widget-title ">
                {{ $item->attributes->title }}
                </h5>
                @endif
                <div class="widget-content">
                    <!DOCTYPE html>
                    <html>
                    <head>
                    </head>
                    <body>
                    <div class="responsiveRapper">
                        <iframe width="" height="315" src="{{ $item->attributes->video }}">
                        </iframe>
                    </div>
                    </body>
                    </html>
                </div>
            </div>
        
        </div><!--/ widget light -->
    @break
    @case('cardlayout')
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
        <!--  CARD ITEM START  -->
        <div class="card-item ">
            @if(!empty($item->attributes->url))
            @php 
                if( $item->attributes->target == 1 ) :
                    $target = 'target="_blank"';
                else : 
                    $target = 'target="_self"';
                endif
            @endphp
            <a {{ $target }} href="{{ $url }}">
            @endif
                <div class="thumbnail zoh">
                    @php 
                        if (!empty($item->attributes->image)) : 
                            $image = getMedia($item->attributes->image, 'normal-thumbnail');
                        else :
                            $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                        endif;
                    @endphp
                    <img src="{{ $image }}" alt="">
                </div>
                <!--thumbnail-->
                @if(!empty($item->attributes->title))
                <div class="title">
                    <h6>{{ $item->attributes->title }}</h6>
                </div>
                @endif
                <!--title-->
                @if(!empty($item->attributes->content))
                <div class="excerpt">
                    {!! $item->attributes->content !!}
                </div>
                @endif
            @if(!empty($item->attributes->url))
            </a>
            @endif
        </div>
        <!--  CARD ITEM END  -->
    @break
    @case('listlayout')
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
        <!--  LIST ITEM -->
        <div class="list-item ">
            @if(!empty($item->attributes->url))
            @php 
                if( $item->attributes->target == 1 ) :
                    $target = 'target="_blank"';
                else : 
                    $target = 'target="_self"';
                endif
            @endphp
            <a {{ $target }} href="{{ $url }}">
            @endif
                <div class="thumbnail">
                    @php 
                        if (!empty($item->attributes->image)) : 
                            $image = getMedia($item->attributes->image, 'normal-thumbnail');
                        else :
                            $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                        endif;
                    @endphp
                    <img src="{{ $image }}" alt="">
                </div>
                <!--thumbnail-->
                <div class="list-item-text-container pr-3">
                    @if(!empty($item->attributes->title))
                    <div class="title">
                        <h6>{{ $item->attributes->title }}</h6>
                    </div>
                    @endif
                    <!--title-->
                    @if(!empty($item->attributes->content))
                    <div class="excerpt">
                        {!! $item->attributes->content !!}
                    </div>
                    @endif
                </div><!-- list-item-text-container -->
            @if(!empty($item->attributes->url))
            </a>
            @endif
        </div><!-- / col-lg-12 list-item -->
        <!--  / LIST ITEM  END  -->
    @break
    @case('containerwidget')
        <div style="height: 100%;" class="block-container d-flex align-items-center">
            <div class="row">
                @foreach ($item->attributes->section_elements as $item)
                    @include('layouts/resource-blocks-dh')
                @endforeach
            </div><!--row-->
        </div>
    @break
@endswitch