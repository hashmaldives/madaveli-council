<div>
    <header dir="{{ $language == 'dh' ? 'rtl' : 'ltr' }}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" class="header shrink-on-scroll header-dualmenu light mainNavbar {{ $language == 'dh' ? 'rtl' : 'ltr' }}">

            <div class="logo-container">
                <div class="row">
                    <div class="col justify-content-center">
                        <a class="header-logo" href="/">
                            <div class="logo-img-container">
                                <img src="{{ getMedia(nova_get_setting('header_logo_icon'), null) }}">
                            </div>
                            @if ( !empty( nova_get_setting('header_logo_text_en') ) )
                            <div class="logo-text {{ $language == 'dh' ? 'dh' : 'en' }}">
                                <div class="lang-{{$language}} visible">
                                    <h3>{{ $language == 'dh' ? nova_get_setting('header_logo_text_dh') : nova_get_setting('header_logo_text_en') }}</h3>
                                    
                                    @if(!empty(nova_get_setting('header_logo_subtext_en') || nova_get_setting('header_logo_subtext_dh')))
                                    <h5>{{ $language == 'dh' ? nova_get_setting('header_logo_subtext_dh') : nova_get_setting('header_logo_subtext_en') }}</h5>
                                    @endif
                                </div><!-- / lang-en -->
                            </div> <!-- / logo-text -->
                            @endif
                        </a>
                    </div>
                </div>
            </div> <!-- / logo-container -->
            <div class="main-nav">
                <div class="row">
                    <div class="col-lg-12 col-md-12 navigation-container d-flex">
                        <div class="container d-flex align-items-center position-relative">
                            <div class="wrapper">
                                <div>
                                    <div class="navbar-toggler-wrapper">
                                        <a class="navbar-toggler offCanvasToggler">
                                            <span class="navbar-toggle-icon"> <i class="fas fa-bars fa-lg"></i> </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="scrolled-logo">
                                    <img src="{{ getMedia(nova_get_setting('header_logo_icon'), null) }}">
                                </div>
                                @include('templates/menus/primary-menu')
                            </div>
                        </div><!-- / container -->
                    </div><!-- / navigation-container -->
                    
                </div>
                
            </div> <!-- / main-nav -->
        
        
        <div class="mega-search">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="lang-{{ $language }} visible">
                            <form class="mega-search-form position-relative padding-tb-20" role="search" action="{{ route('site-search') }}" method="get">
                                <input class="mega-search-input {{ $language == 'dh' ? 'dhivehi-input thaana-keyboard' : '' }}" type="text" value="" name="search" id="search" placeholder="{{ $language == 'dh' ? 'ހޯދާ' : 'Search' }}">
                                <i class="fas fa-search fa-lg search-field-icon"></i>
                            </form>
                        </span>
                    </div>
                    <div style="flex: 0 40px;" class="col d-flex align-items-center justify-content-center">
                        <a class="megaSearchTrigger megasearch-close-icon">
                            <i class="fas fa-times fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
        

    </header>
</div>