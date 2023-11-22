@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif

<!--  CARD ITEM START  -->
<div class="col-lg-3 col-md-4 col-md-6 col-6 card-item">
    <a href="{{ route($item->route, $item->id) }}">
        <div class="thumbnail zoh">
            @php 
                if (!empty($item->image)) : 
                    $image = getMedia($item->image, 'normal-thumbnail');
                else :
                    $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                endif;
            @endphp
            <img src="{{ $image }}">
        </div>
        <!--thumbnail-->
        <div class="text">
            <div class="meta">
                <div class="row">
                    <div class="col-12">
                        <p class="lang-{{ $language }} visible"><i class="far fa-clock text-color-primary-dimm"></i><span class="pl-2 pr-2">{{ $item->created_at->diffForHumans() }}</span></p>
                    </div>
                </div>
            </div><!-- / meta -->
            <div class="title">
                <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
            </div>
            <!--title-->
        </div>
    </a>
</div>
<!--col-lg-6 card-item-->
<!--  CARD ITEM END  -->