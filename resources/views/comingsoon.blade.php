
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ getMedia(nova_get_setting('fav_icon'), null) }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/fontawesome6/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hashframework.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <title>{{ nova_get_setting('og_site_name') }}</title>

</head>
<body dir="ltr">
    @php 
        if(!empty(nova_get_setting('maintenence_page_background_image'))): 
            $bg = getMedia(nova_get_setting('maintenence_page_background_image'), null);
        else:
            $bg = asset('assets/img/002.jpg');
        endif;
    @endphp

    <div style="background-image: url('{{$bg}}'); background-position: center center; background-size: cover; position: absolute; width: 100%; background-size: cover; height: 100vh;" class="">
        <div style="position: absolute; background-color: rgba(0,0,0,0.7); height: 100vh; width: 100%;" class="bg-filter">
        </div>
        <div style="height: 100vh; display: flex; align-items: center; justify-content: center;" class="container">
            <div style="color: #fff; z-index: 100; text-align: center; max-width: 500px;" class="contents-container text-center">
                <div class="site-logo pb-5">
                    <img style="width: 250px; height: auto;" src="{{ getMedia(nova_get_setting('header_logo_icon'), null) }}" alt="">
                </div>
                @if(!empty(nova_get_setting('maintenence_site_name')))
                <h1>{{ nova_get_setting('maintenence_site_name') }}</h1><br>
                <div style="display: flex; justify-content: center;">
                    <div style="width: 180px; border-bottom: 1px solid #CECECE; text-align: center;"></div>
                </div>
                @endif

                @if(!empty(nova_get_setting('maintenence_page_title')))
                    <div style="width: 100%px; display: flex; justify-content: center;">
                        <div class="pt-3" style="max-width: 375px;">
                            <p>{{ nova_get_setting('maintenence_page_title') }}</p>
                        </div>
                    </div>
                @endif
                {!! nova_get_setting('maintenence_content') !!}
                
                
                <div style="display: flex; justify-content: center;">
                    <div style="width: 180px; border-bottom: 1px solid #CECECE; text-align: center;"></div>
                </div>
                
                <div style="position: relative; display: flex; justify-content: center; padding-top: 30px; color: #777 !important;" class="social-box">
    
                    <div class="social-icons">
                        @if (!empty(nova_get_setting('org_phone')))
                            <a class="social-icon" href="tel:{{ nova_get_setting('org_phone') }}">
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
    </div>

</body>
</html>