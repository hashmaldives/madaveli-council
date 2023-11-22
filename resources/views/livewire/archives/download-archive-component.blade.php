@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($titleEn)) : 
        $pageTitle = $titleEn . ' - ' . nova_get_setting('og_site_name');
    else:
      $pageTitle = nova_get_setting('og_site_name');
    endif;
@endphp
@section('archive-title')
{{ $titleEn }} {{ ' - ' }}
@endsection
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;">
        <div class="container page-content no-image">
            <div class="page-title">
                <div class="page-title-inner">
                    <span class="lang-{{ $language }} visible"><h2>{{ $language == 'dh' ? $titleDh : $titleEn }}</h2></span>
                    <div class="single-under-title d-flex">
                        {{ hashSocialShare($actual_link, $pageTitle) }}
                    </div> <!-- / single-under-title -->
                </div><!-- / page-title-inner -->
            </div><!-- / page-title -->
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget mb-4">
                            <div class="widget-container">
                                <div class="widget-content pl-0 pr-0">
                                    <div>
                                        @if ($search)
                                            <div class="clear-filter">
                                                <button wire:click="$set('search' ,'')">
                                                    <div class="lang-{{ $language }} visible">
                                                        <i class="fas fa-times"></i><span>{{ $language == 'dh' ? 'ސާޗް ކްލިއަރ' : 'Clear Search' }}</span>
                                                    </div>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="resource-search position-relative">
                                        <x-elements.fields.search-field 
                                            type="text" 
                                            placeHolderEn="Search" 
                                            placeHolderDh="ހޯދާ" 
                                            col="6" 
                                            name="search" 
                                            class="search-input form-control" 
                                            req="true" 
                                            dualLanguage="true" 
                                            :language=$language
                                        />
                                        <i class="fas fa-search search-field-icon"></i>
                                    </div>
                                </div>
                            </div><!-- / widget-container -->
                        </div><!-- / widget -->
                        <div class="widget">
                            <div class="widget-container">
                                <div id="categoryFilterAccordion" class="resource-filter-accordion">
                                    <a class="" type="button" data-toggle="collapse" data-target="#categoryFilter" aria-expanded="true" aria-controls="brandFilter">
                                        <h6 class="widget-title with-bg text-left overflow-auto">
                                                <span class="lang-{{ $language }} visible text-light {{ $language == 'dh' ? 'float-right' : 'float-left' }}">{{ $language == 'dh' ? 'ފިލްޓަރ ބައި ކެޓަގަރީ' : 'Filter by Category' }}</span>
                                            <i class="fas fa-chevron-down {{ $language == 'dh' ? 'float-left' : 'float-right' }}"></i>
                                        </h6>
                                    </a>
                                    <div id="categoryFilter" class="resource-filter collapse show" aria-labelledby="headingOne" data-parent="#categoryFilterAccordion">
                                        <div class="widget-content">
                                            <div>
                                                @if ($selectedCategory)
                                                    <div class="clear-filter">
                                                        <button wire:click="$set('selectedCategory' ,[])">
                                                            <div class="lang-{{ $language }} visible">
                                                                <i class="fas fa-times"></i><span>{{ $language == 'dh' ? 'ފިލްޓަރ ކްލިއަރ' : 'Clear Filters' }}</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                            @foreach( $categories as $item )
                                                <label class="form-check-label control control--checkbox {{ $language == 'dh' ? 'rtl' : 'ltr' }}" wire:key="{{ $item->id }}">
                                                    <input type="checkbox" wire:model="selectedCategory" class="form-check-input"  value="{{ $item->id }}">
                                                    <div class="control__indicator"></div>
                                                    <span class="label">
                                                        <div class="lang-{{ $language }} visible"><p class="mb-0">{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</p></div>    
                                                    </span>
                                                </label>
                                            @endforeach
                                        </div><!--widget-content-->
                                    </div><!--collapse-->
                                </div><!--categoryFilterAccordion-->
                            </div><!--widget-container-->
                        </div><!--widget-->
                        <!--Sidebar widgets here-->
                        <div class="lang-{{$language}} visible">
                            @if($language == 'dh')
                                @if(!empty($sidebar->content_dh))
                                    <livewire:handlers.sidebar-handler-component :data="$sidebar->content_dh"/>
                                @endif
                            @elseif($language == 'en')
                                @if(!empty($sidebar->content_en))
                                    <livewire:handlers.sidebar-handler-component :data="$sidebar->content_en"/>
                                @endif
                            @endif
                        </div>
                    </div><!-- / sidebar -->
                </div><!--col-lg-4-->
                <div class="col-lg-9">
                        <div class="page-text ">
                            <div class="row">
                                @foreach ($data as $item)
                                    <!--  RESOURCE ITEM START  -->
                                    <div class="col-lg-6 col-md-6 col-12">
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
                                @endforeach
                            </div><!--row-->
                        </div> <!-- / page-text -->
                        <div class="row d-flex justify-content-center pt-5 pb-2">
                            {{ $data->links() }}
                        </div>
                </div> <!-- / col-lg-8 -->
            </div> <!--row-->
        </div><!-- / container -->
    </div> <!-- / page-container -->
@push('scripts')
<script>
    function togglePanel (){
        var w = $(window).width();
        if (w <= 1000) {
            $('.resource-filter').removeClass('show');
        } else {
            $('.resource-filter').addClass('show');
        }
    }
    $(window).resize(function(){
        togglePanel();
    });
    togglePanel();
</script>
@endpush