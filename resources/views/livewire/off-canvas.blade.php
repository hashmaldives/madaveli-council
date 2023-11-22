<div>
    <div class="overlay"></div>
    <div class="offCanvas light {{ $language == 'dh' ? 'right' : 'left' }}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;">
        <div class="offcanvas-header d-flex align-items-center justify-content-center">
            <a class="navbar-toggler offCanvasToggler navbar-close-icon">
                <i class="fas fa-times"></i>
            </a>
        </div> <!-- / offcanvas-header -->
        @if(!empty( nova_get_setting('org_phone') || nova_get_setting('org_email') || nova_get_setting('facebook_handler') || nova_get_setting('twitter_handler') || nova_get_setting('instagram_handler') || nova_get_setting('linkedin_handler') || nova_get_setting('youtube_handler') ))
            <div dir="ltr" style="width: 100%;" class="social-icons pl-3">
                @if (!empty(nova_get_setting('org_phone')))
                    <a class="social-icon" href="tel:{{ nova_get_setting('org_phone') }}">
                        <i class="fas fa-phone fa-flip-horizontal"></i>
                    </a>
                @endif
                @if (!empty(nova_get_setting('org_email')))
                    <a class="social-icon" href="mailto:{{ nova_get_setting('org_email') }}">
                        <i class="fas fa-envelope"></i>
                    </a>
                @endif
                @if (!empty(nova_get_setting('facebook_handler')))
                    <a class="social-icon" target="_blank" href="https://www.facebook.com/{{ nova_get_setting('facebook_handler') }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                @endif
                @if (!empty(nova_get_setting('twitter_handler')))
                    <a class="social-icon" target="_blank" href="https://www.twitter.com/{{ nova_get_setting('twitter_handler') }}">
                        <i class="fab fa-twitter"></i>
                    </a>
                @endif
                @if (!empty(nova_get_setting('instagram_handler')))
                    <a class="social-icon" target="_blank" href="https://www.instagram.com/{{ nova_get_setting('instagram_handler') }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                @endif
                @if (!empty(nova_get_setting('linkedin_handler')))
                    <a class="social-icon" target="_blank" href="https://www.linkedin.com/company/{{ nova_get_setting('linkedin_handler') }}">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                @endif
                @if (!empty(nova_get_setting('youtube_handler')))
                    <a class="social-icon" target="_blank" href="https://www.youtube.com/user/{{ nova_get_setting('youtube_handler') }}">
                        <i class="fab fa-youtube"></i>
                    </a>
                @endif
            </div>
        @endif

        <div class="offcanvas-search">
            <div class="lang-en">
                <form class="offcanvas-search-form-container position-relative" role="search" action="{{ route('site-search') }}" method="get">
                    <input class="offcanvas-search-form " type="text" value="" name="term" id="search" placeholder="Search">
                    <i class="fas fa-search search-field-icon gradient-text"></i>
                </form>
            </div>
            
            <div class="lang-dh">
                <form class="offcanvas-search-form-container position-relative" role="search" action="{{ route('site-search') }}" method="get">
                    <input class="offcanvas-search-form dhivehi-input thaana-keyboard " type="text" value="" name="term" id="search" placeholder="ހޯދާ">
                    <i class="fas fa-search search-field-icon gradient-text"></i>
                </form>
            </div>
        </div>

        <!-- Offcanvas Menu-->
        {{-- <x-offcanvas-menu /> --}}
        @include('templates/menus/offcanvas-menu')
        
    </div><!-- / offCanvas bg-dark -->
</div>