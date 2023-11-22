<!--  RESOURCE ITEM START  -->
<div class="col-lg-4 col-md-6 col-12">
    <a target="_blank" href="{{ getMedia($item->attachment, null) }}">
        <div class="publication-resource-item">
            <div class="publication-resource-icon">
                <i class="icon-doctype {{ $item->icon }}"></i>
            </div><!-- / icon -->
            <div class="text">
                <div class="title">
                    <div class="lang-{{ $language }} visible"><span>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</span></div>
                </div>
                <div class="meta">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <p class="resource-tag lang-{{ $language }} visible">
                                    <i class="fas fa-tag"></i><span>{{ $language == 'dh' ? $item->download_category->title_dh : $item->download_category->title_en}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
              </div><!-- / meta -->
            </div><!-- / text -->
        </div>
    </a>
</div>
<!--  RESOURCE ITEM END  -->