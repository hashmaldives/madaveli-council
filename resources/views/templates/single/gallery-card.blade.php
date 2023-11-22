@php 
    if($item->type == 'image') {
        $icon = '<i class="fas fa-camera"></i>';
    } elseif($item->type == 'video') {
        $icon = '<i class="fas fa-video"></i>';
    } elseif($item->type == 'photovideo') {
        $icon = '<i class="fas fa-photo-video"></i>';
    } else {
        $icon = '<i class="fas fa-camera pl-2"></i>';
    }
@endphp
<!--  GALLERY CARD ITEM  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-6 gallery-card-item">
    <a href="{{ route($item->route, $item->id) }}">
        <div class="thumbnail position-relative">
            @php 
                if (!empty($item->image)) : 
                    $image = getMedia($item->image, 'normal-thumbnail');
                else :
                    $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                endif;
            @endphp
            <img src="{{ $image }}" alt="">
            <div class="camera-icon">{!! $icon !!}</div>
        </div><!--thumbnail-->
        <div class="title pt-3">
            <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
        </div> <!--title-->
    </a>
</div><!-- / col-lg-3 gallery-card-item -->
<!--  / GALLERY CARD ITEM  END -->