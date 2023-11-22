<div>
    @if(!empty($slides))
        <div style="max-width: 100%;" class="slider">
            <div style="max-width: 100%;" class="master-slider ms-skin-default home-slider" id="masterslider">
                @foreach ($slides as $slide)
                    <!-- new slide -->
                    <div class="ms-slide">
                        <!-- slide background -->
                        <img data-src="{{ getMedia($slide->image, null) }}" />

                        @if ($slide->bg_filter_activate == 1)
                            @php
                            $filter_bg_hex = $slide->bg_filter_color;
                            $filter_opacity = $slide->filter_visibility;
                            if ($filter_opacity == 10):
                            $filter_opacity_value = '1';
                            else:
                            $filter_opacity_value = '0.' . $filter_opacity;
                            endif;
                            $hex = '#ff9900';
                            [$r, $g, $b] = sscanf($filter_bg_hex, '#%02x%02x%02x');
                            $filter_bg_rgba = 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $filter_opacity_value . ')';
                            @endphp
                            <div style="background-color: {{ $filter_bg_rgba }}" class="bg-filter"></div>
                        @endif

                        @if (!empty($slide->slide_sections_en || $slide->slide_sections_dh ))
                            <div
                                class="ms-layer ms-caption {{ $slide->caption_position }}"
                                @if($slide->caption_animation !== 'none')
                                data-effect="{{ $slide->caption_animation }}" 
                                @else
                                data-effect="fade" 
                                @endif
                                data-duration="1800" 
                                data-delay="0" >
                                <div class="ms-caption-container d-flex">
                                    <div style="color: {{ $slide->caption_text_color }};" class="caption-inner">
                                        @if($language == 'dh')
                                            <div class="lang-dh visible">
                                                <div style="color: {{ $slide->caption_text_color }} !important;" class="row">
                                                    @foreach (json_decode($slide->slide_sections_dh) as $item)
                                                        @include('layouts/flexible-layouts-slide')
                                                    @endforeach
                                                </div>
                                            </div><!-- / lang -->
                                        @elseif($language == 'en')
                                            <div class="lang-en visible">
                                                <div style="color: {{ $slide->caption_text_color }} !important;" class="row">
                                                    @foreach (json_decode($slide->slide_sections_en) as $item)
                                                        @include('layouts/flexible-layouts-slide')
                                                    @endforeach
                                                </div>
                                            </div><!-- / lang -->
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($slide->url))
                            <!-- linked slide -->
                            <a target="_blank" href="{{ $slide->url }}">Link</a>
                        @endif
                        @if (!empty($slide->video))
                            <!-- slide background video -->
                            <video data-autopause="true" data-mute="true" data-loop="true" data-fill-mode="fill">
                                <source id="mp4" src="{{ getMedia($slide->video, null) }}"
                                    type="video/mp4" />
                                <source id="ogv" src="http://media.w3.org/2010/05/bunny/trailer.ogv" type="video/ogg"/>
                            </video>
                        @endif

                    </div>
                    <!-- end of slide -->
                @endforeach 
            </div>
            <!-- end of masterslider -->
            
        </div> <!-- / slider --> 
    @endif
</div>
@push('scripts')
    <script src="{{ asset('js/masterslider/masterslider.js') }}"></script>
    <script>
        function SliderInit() {
            $(document).ready(function() {
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 2500, // slider standard width
                    height: 700, // slider standard height
                    minHeight: 400,
                    space: 5,
                    loop: true,
                    autoplay: true,
                    //autoHeight:true,
                    view: 'fade',
                    parallaxMode: 'mouse',
                    mobileInlineVideo: true,
                    // more slider options goes here...
                    // check slider options section in documentation for more options.
                });

                // adds Arrows navigation control to the slider.
                //slider.control('arrows');
                slider.control('arrows');
                slider.control('bullets', { autohide: false, align: 'bottom', margin: 10 });
                MSScrollParallax.setup(slider, 50, 40, true);
            });
        }
        SliderInit();
        window.addEventListener('contentChanged', event => {
            SliderInit();
        });
    </script>
@endpush
