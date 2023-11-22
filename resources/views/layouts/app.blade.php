@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($data->title_en)) : 
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    elseif(!empty($page->title_en)):
        $pageTitle = $page->title_en . ' - ' . nova_get_setting('og_site_name');
    else : 
        $pageTitle = nova_get_setting('og_site_name');
    endif;
@endphp

<!DOCTYPE html>
{{-- Rendering <html> Tag with language trait --}}
<html>
<head>
    <!--[ Site meta settings ]-->
    <title>@yield('archive-title'){{ $pageTitle }}</title>
    @if(!empty(nova_get_setting('site_description')))<meta name="description" content="{{ nova_get_setting('site_description') }}"/>@endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ getMedia(nova_get_setting('fav_icon'), null) }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--[ OG Settings ]-->
    @if(!empty(nova_get_setting('og_title')))<meta property="og:url" content="{{ $actual_link }}"/>@endif
    @if(!empty(nova_get_setting('og_title')))<meta property="og:type" content="article"/>@endif
    @if(!empty(nova_get_setting('og_title')))<meta property="og:title" content="{{ nova_get_setting('og_title') }}"/>@endif
    @if(!empty(nova_get_setting('site_description')))<meta property="og:description" content="{{ nova_get_setting('site_description') }}"/>@endif
    @if(!empty(nova_get_setting('default_og_image')))<meta property="og:image" content="{{ getMedia(nova_get_setting('default_og_image'), 'social-thumbnail') }}"/>@endif
    @if(!empty(nova_get_setting('default_og_image')))<meta property="og:image:width" content="920" />@endif
    @if(!empty(nova_get_setting('default_og_image')))<meta property="og:image:height" content="480" />@endif

    <!--[ Facebook Settings ]-->
    @if(!empty(nova_get_setting('facebook_sharing_app_id')))<meta property="fb:app_id" content="{{ nova_get_setting('facebook_sharing_app_id') }}"/>@endif
    @if(!empty(nova_get_setting('facebook_handler')))<meta property="article:publisher" content="https://www.facebook.com/{{ nova_get_setting('facebook_handler') }}" />@endif

    <!--[ Twitter Settings ]-->
    <meta name="twitter:card" content="summary_large_image"/>
    @if(!empty(nova_get_setting('twitter_handler')))
        <meta name="twitter:site" content="{{ '@' . nova_get_setting('twitter_handler') }}"/>
        <meta name="twitter:creator" content="{{ '@' . nova_get_setting('twitter_handler') }}"/>
    @endif
    @if(!empty(nova_get_setting('og_title')))<meta name="twitter:title" content="{{ nova_get_setting('og_title') }}"/>@endif
    <meta name="twitter:widgets:csp" content="on">
    @if(!empty(nova_get_setting('site_description')))<meta name="twitter:description" content="{{ nova_get_setting('site_description') }}"/>@endif
    @if(!empty(nova_get_setting('default_og_image')))<meta name="twitter:image" content="'{{ nova_get_setting('default_og_image') }}" />@endif
    <meta name="twitter:url" content="{{ env('APP_URL') }}" />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!--[ / Site meta settings ]-->

    {{-- Styles --}}
    @include('assets.styles')

    @stack('styles')
    @section('customcss')
    @show
    
    {{-- Header Scripts --}}
    @include('assets.scriptsHeader')

    @stack('scriptsHeader')
    @livewireStyles
</head>
<body>
<div class="offcanvas-wrapper">
<livewire:off-canvas />
<div class="main-content">
<livewire:header />
<div class="mainContainer">
{{ $slot }}
<livewire:footer />
</div><!-- / mainContainer -->
</div><!-- / main-content -->
</div><!-- / offcanvas-wrapper -->

@include('assets.scriptsFooter')

@stack('scripts')
@section('customjs')
@show
@livewireScripts
</body>
</html>