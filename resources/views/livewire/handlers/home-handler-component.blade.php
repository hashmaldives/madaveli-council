<div>
    <div {{ $language == 'dh' ? 'dir=rtl' : 'dir=ltr' }} class="home-page-container bg-white" @if(!empty(nova_get_setting('website_pattern'))) style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" @endif>
        
        @if(nova_get_setting('enable_landing_video') == 1)
            <div class="landing-section">
                @if(!empty(nova_get_setting('landing_video')))
                <div class="video-wrapper">
                    <div class="background-video">
                        <video muted loop autoplay playsinline src="{{ getMedia(nova_get_setting('landing_video'), null) }}"></video>
                    </div>
                </div>
                @endif
                <div class="container-fluid section-content">
                    <div class="row">
                        <div class="col-lg-7">
                            <div style="color: {{ nova_get_setting('landing_section_text_color') ?? '#ffffff' }};" class="intro-text">
                                <style>
                                    .landing-section p,
                                    .landing-section h1,
                                    .landing-section h2,
                                    .landing-section h3,
                                    .landing-section h4,
                                    .landing-section h5,
                                    .landing-section h6,
                                    .landing-section span {
                                        text-shadow: 0 0 35px {{ nova_get_setting('landing_section_text_shadow_color') ?? '#000000' }};
                                    }
                                </style>
                                <div class="lang-{{ $language }} visible">
                                    @if($language = 'dh')
                                        {!! nova_get_setting('intro_text_dh') !!}
                                    @else
                                        {!! nova_get_setting('intro_text_en') !!}
                                    @endif
                                </div>
                            </div>
                        </div><!--col-lg-6-->
                    </div>
                </div>
            </div>
        @else 
            <livewire:elements.slider-component />
        @endif
        @if( $homeSections->count() >= 1 )

            @foreach ( $homeSections as $item )

                @if( $item->active == 1 && $item->maps == 0 )

                    @include('layouts/home-sections')

                    @if($item->parallax == 1)

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

                    @endif
                
                @elseif( $item->active == 1 && $item->maps == 1  )

                    @include('layouts/map-page-section')

                @endif

            @endforeach

        @endif
        

    </div><!-- / page-container -->
</div>