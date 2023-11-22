@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($titleEn)) : 
        $pageTitle = $titleEn . ' - ' . nova_get_setting('og_site_name');
    else : 
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
                                        wire:model="search"
                                        type="text" 
                                        placeHolderEn="Search" 
                                        placeHolderDh="ހޯދާ" 
                                        col="6" 
                                        name="search" 
                                        class="search-input form-control {{ $language == 'dh' ? 'thaana-keyboard' : '' }}" 
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
                            <div id="typeFilterAccordion" class="resource-filter-accordion">
                                <a class="" type="button" data-toggle="collapse" data-target="#typeFilter" aria-expanded="true" aria-controls="brandFilter">
                                    <h6 class="widget-title with-bg text-left overflow-auto">
                                            <span class="lang-{{ $language }} visible text-light {{ $language == 'dh' ? 'float-right' : 'float-left' }}">{{ $language == 'dh' ? 'ފިލްޓަރ ބައި ޓައިޕް' : 'Filter by Type' }}</span>
                                        <i class="fas fa-chevron-down {{ $language == 'dh' ? 'float-left' : 'float-right' }}"></i>
                                    </h6>
                                </a>
                                <div id="typeFilter" class="resource-filter collapse show" aria-labelledby="headingOne" data-parent="#typeFilterAccordion">
                                    <div class="widget-content">
                                        <div>
                                            @if ($selectedType)
                                                <div class="clear-filter">
                                                    <button wire:click="$set('selectedType' ,[])">
                                                        <div class="lang-{{ $language }} visible">
                                                            <i class="fas fa-times"></i><span>{{ $language == 'dh' ? 'ފިލްޓަރ ކްލިއަރ' : 'Clear Filters' }}</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        @foreach( $types as $item )
                                            <label class="form-check-label control control--checkbox {{ $language == 'dh' ? 'rtl' : 'ltr' }}" wire:key="{{ $item->id }}">
                                                <input type="checkbox" wire:model="selectedType" class="form-check-input"  value="{{ $item->id }}">
                                                <div class="control__indicator"></div>
                                                <span class="label">
                                                    <div class="lang-{{ $language }} visible"><p class="mb-0">{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</p></div>    
                                                </span>
                                            </label>
                                        @endforeach
                                    </div><!--widget-content-->
                                </div><!--collapse-->
                            </div><!--typeFilterAccordion-->
                        </div><!--widget-container-->
                    </div><!--widget-->
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
                    @if($dateFilterApplied == true)
                        <div class="mt-2 info-box alert alert-info lang-{{$language}} visible" role="alert">
                            <div class="text-container">
                                <p>{{ $language == 'dh' ? ThaanaDate::format('j M Y', Carbon\Carbon::parse($start)->timestamp ) . ' އިން ފެށިގެން ' . ThaanaDate::format('j M Y', Carbon\Carbon::parse($end)->timestamp ) . ' ' . 'އަށް ހުރި ލިޔުންތައް ': 'Displaying items from ' . Carbon\Carbon::parse($start)->format('d M Y') . ' to ' . Carbon\Carbon::parse($end)->format('d M Y') }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        @foreach ($data as $item)
                        <!--  CARD ITEM START  -->
                        <div class="col-lg-6 col-md-6 col-md-6 col-12 business-item">
                            <a href="{{ route('single-business', $item->slug) }}">
                                <div class="thumbnail zoh">
                                    @php 
                                        if (!empty($item->image)) : 
                                            $image = getMedia($item->image, 'large-thumbnail');
                                        else :
                                            $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                                        endif;
                                    @endphp
                                    <img style="width: 100%; object-fit: cover;" src="{{ $image }}">
                                    <!--thumbnail-->
                                    <div class="text">
                                        <div class="text-inner">
                                            <div class="tags">
                                                @foreach ($item->business_category as $category)
                                                    <p class="resource-tag mb-2 lang-{{ $language }} visible">
                                                        <i class="fas fa-tag"></i><span>{{ $language == 'dh' ? $category->title_dh : $category->title_en}}</span>
                                                    </p>
                                                @endforeach
                                                @foreach ($item->business_type as $type)
                                                    <p class="resource-tag mb-2 lang-{{ $language }} visible">
                                                        <i class="fa-solid fa-building"></i><span>{{ $language == 'dh' ? $type->title_dh : $type->title_en}}</span>
                                                    </p>
                                                @endforeach
                                            </div>
                                            <div class="title">
                                                <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
                                            </div><!--title-->
                                        </div>
                                    </div>
                                </div>
                                
                            </a>
                        </div>
                        <!--col-lg-6 card-item-->
                        <!--  CARD ITEM END  -->
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