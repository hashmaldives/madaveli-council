<link rel="stylesheet" href="{{ asset('css/fontawesome6/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/hashframework.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

{{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  --}}

@if(Route::currentRouteName() == 'root' || Route::currentRouteName() == 'home' )
<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="{{ asset('css/masterslider/style/masterslider.css') }}" />
<!-- MasterSlider default skin -->
<link rel="stylesheet" href="{{ asset('css/masterslider/skins/default/style.css') }}" />

@endif