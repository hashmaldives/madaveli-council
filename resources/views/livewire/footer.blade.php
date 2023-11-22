<div>
    <footer style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" class="main-footer footer-default light position-relative">
        <div class="footer-wrapper">
            @if ( !empty($widgets) )
                <div class="footer-widgets light position-relative">
                    <div class="container footer-widgets-container">
                        @if($language == 'dh')
                            <!--DH-->
                            <div class="lang-dh visible">
                                <div class="row justify-content-center">
                                    @if(!empty($widgets->content_dh))
                                    @foreach ( json_decode($widgets->content_dh) as $item)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            @include('layouts/widget-layouts/flexible-layouts-widget-dh')
                                        </div>
                                    @endforeach
                                    @endif
                                </div> <!--row-->
                            </div><!--lang-dh-->
                        @else 
                            <!--EN-->
                            <div class="lang-en visible">
                                <div class="row justify-content-center">
                                    @if(!empty($widgets->content_en))
                                    @foreach ( json_decode($widgets->content_en) as $item)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            @include('layouts/widget-layouts/flexible-layouts-widget-en')
                                        </div>
                                    @endforeach
                                    @endif
                                </div> <!--row-->
                            </div><!--lang-en-->
                        @endif

                    </div><!-- / footer-widgets-container -->
                </div>
            @endif
            
            <div class="footer-copyright light position-relative">
                <div class="container">
                    <p class="footer-text no-margin text-center">{{ nova_get_setting('footer_copyright_text') ?? 'Copyright © ' . now()->year . ' ' . nova_get_setting('og_site_name') . '. All Rights Reserved' }}</p>
                    
                </div>
            </div>

        </div>
        
    </footer>
</div>
