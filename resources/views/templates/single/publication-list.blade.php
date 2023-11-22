@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif

<!--  RESOURCE ITEM START  -->
<div class="col-lg-4 col-md-6 col-12">
    <a href="{{ route($item->route, $item->id) }}">
        <div class="publication-resource-item">
            <div class="publication-resource-icon">
                <i class="fa-solid fa-file"></i>
            </div><!-- / icon -->
            <div class="text">
                <div class="title">
                    <div class="lang-{{ $language }} visible"><span>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</span></div>
                </div>
                <div class="meta">
                    <div class="row">
                        <div class="col-12 {{ $language == 'dh' ? 'text-right' : 'text-left' }}">
                            <p class="resource-tag lang-{{ $language }} visible">
                                <i class="fas fa-tag"></i><span>{{ $language == 'dh' ? $item->publication_category->title_dh : $item->publication_category->title_en}}</span>
                            </p>
                            <p class="lang-{{ $language }} visible ml-2 mr-2"><i class="far fa-clock text-color-primary-dimm"></i><span class="pl-2 pr-2">{{ $item->created_at->diffForHumans() }}</span></p>
                        </div>
                    </div>
                </div><!-- / meta -->
            </div><!-- / text -->
        </div>
    </a>
</div>
<!--  RESOURCE ITEM END  -->