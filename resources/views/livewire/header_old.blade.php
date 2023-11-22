<div>
    <header dir="{{ $language == 'dh' ? 'rtl' : 'ltr' }}" class="header header-default transparent dark mainNavbar shrink-on-scroll {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
            
        <div class="container-fluid pl-0 pr-0">
            <div class="row d-flex align-items-center">

                <div class="col-lg-12 col-md-12 navigation-container d-flex align-items-center">
                    <div class="header-logo-container">
                        <a class="header-logo d-flex align-items-center justify-content-right align-self-left" href="/">
                            <div class="logo-img-container">
                                <img src="{{ getMedia(nova_get_setting('header_logo_icon'), null) }}">
                            </div><!-- / logo-img-container -->
                            @if ( !empty( nova_get_setting('header_logo_text_en') ) )
                            <div class="logo-text">
                                <div class="lang-{{$language}} visible">
                                    <h3>{{ $language == 'dh' ? nova_get_setting('header_logo_text_dh') : nova_get_setting('header_logo_text_en') }}</h3>
                                    
                                    @if(!empty(nova_get_setting('header_logo_subtext_en') || nova_get_setting('header_logo_subtext_dh')))
                                    <h5>{{ $language == 'dh' ? nova_get_setting('header_logo_subtext_dh') : nova_get_setting('header_logo_subtext_en') }}</h5>
                                    @endif
                                </div><!-- / lang-en -->
                            </div> <!-- / logo-text -->
                            @endif
                        </a>
                    </div><!-- /  -->
                    <a class="navbar-toggler offCanvasToggler align-items-center">
                        <span class="navbar-toggle-icon"> <i class="fas fa-bars fa-lg"></i> </span>
                    </a>
                    <!-- Menu-->
                    {{-- <x-primary-menu /> --}}
                    {{-- <livewire:elements.navigation-menu-component menuClass="primary" /> --}}
                    @include('templates/menus/primary-menu')
                </div><!-- / navigation-container -->
            </div><!--row-->
        </div>  <!-- / container-fluid -->
        
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
@php $lang = Session::get('language'); @endphp

{{-- @push('scripts')
    <script>
        window.addEventListener('languageEventDispatch', event => {

        });
    </script>
@endpush --}}