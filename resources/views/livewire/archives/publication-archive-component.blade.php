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
{{-- {{dd($data)}} --}}
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;">
        <div class="container page-content no-image">
            <div class="page-title">
                <div class="page-title">
                <div class="page-title-inner">
                    <span class="lang-{{ $language }} visible"><h2>{{ $language == 'dh' ? $titleDh : $titleEn }}</h2></span>
                    <div class="single-under-title d-flex">
                        {{ hashSocialShare($actual_link, $pageTitle) }}
                    </div> <!-- / single-under-title -->
                </div><!-- / page-title-inner -->
            </div><!-- / page-title -->
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
                                <div id="typeFilterAccordion" class="resource-filter-accordion">
                                    <a class="" type="button" data-toggle="collapse" data-target="#typeFilter" aria-expanded="true" aria-controls="brandFilter">
                                        <h6 class="widget-title with-bg text-left overflow-auto">
                                                <span class="lang-{{ $language }} visible text-light {{ $language == 'dh' ? 'float-right' : 'float-left' }}">{{ $language == 'dh' ? 'ފިލްޓަރ ބައި ޑޭޓް' : 'Filter by Date' }}</span>
                                            <i class="fas fa-chevron-down {{ $language == 'dh' ? 'float-left' : 'float-right' }}"></i>
                                        </h6>
                                    </a>
                                    <div id="typeFilter" class="resource-filter collapse show" aria-labelledby="headingOne" data-parent="#typeFilterAccordion">
                                        <div class="widget-content pl-0 pr-0">
                                            <div class="date-range-filter position-relative">
                                                <div class="mt-2 info-box alert alert-info lang-{{$language}} visible" role="alert">
                                                    <div class="text-container">
                                                        <p><i class="fas fa-info-circle text-primary"></i> {{ $language == 'dh' ? 'ދެތާރީހެއްގެ ދެމެދުގައިވާ ލިޔުންތައް ފިލްޓަރ ކުރެއްވުމަށް ފެށޭ ތާރިހަކާއި ނިމޭތާރީހެއް ތިރިން ނެންގެވުމަށްފަހު ފިލްޓަރ އަށް ފިއްތާލައްވާ' : 'To filter the results, please pick two dates from the date picker below and click on filter.' }}</p>
                                                    </div>
                                                </div>
                                                <div class="position-relative">
                                                    <x-elements.fields.date-picker mode="range" wire:model="date_range" />
                                                </div>
                                                <div style="justify-content: space-between;" class="d-flex">
                                                    @if(!empty($date_range) && strlen($date_range) >= 20 )
                                                    <div class="clear-filter mt-3 position-relative">
                                                        <button wire:click="setFilter">
                                                            <div class="lang-{{ $language }} visible">
                                                                <span>{{ $language == 'dh' ? 'ފިލްޓަރ' : 'Set Filter' }}</span>
                                                            </div>
                                                        </button>
                                                    </div><!--clear-filter-->
                                                    @endif
                                                    @if ($start)
                                                    <div class="clear-filter mt-3 position-relative">
                                                        <button wire:click="clearFilter">
                                                            <div class="lang-{{ $language }} visible">
                                                                <span>{{ $language == 'dh' ? 'ފިލްޓަރ ކްލިއަރ' : 'Clear Filters' }}</span>
                                                            </div>
                                                        </button>
                                                    </div><!--clear-filter-->
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!--widget-content-->
                                    </div><!--collapse-->
                                </div><!--typeFilterAccordion-->
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
                        <div class="page-text">
                            @if($dateFilterApplied == true)
                            <div class="mt-2 info-box alert alert-info lang-{{$language}} visible" role="alert">
                                <div class="text-container">
                                    <p>{{ $language == 'dh' ? ThaanaDate::format('j M Y', Carbon\Carbon::parse($start)->timestamp ) . ' އިން ފެށިގެން ' . ThaanaDate::format('j M Y', Carbon\Carbon::parse($end)->timestamp ) . ' ' . 'އަށް ހުރި ލިޔުންތައް ': 'Displaying items from ' . Carbon\Carbon::parse($start)->format('d M Y') . ' to ' . Carbon\Carbon::parse($end)->format('d M Y') }}</p>
                                </div>
                            </div>
                            @endif
                            @if(count($items) <= 0)
                            <div class="mt-2 info-box alert alert-info lang-{{$language}} visible" role="alert">
                                <div class="text-container">
                                    <p>{{ $language == 'dh' ? 'މިވަގުތު މިކެޓަގަރީގެ އެއްވެސް ލިޔުމެއް ޝާއިރުކުރެވިފައި ނުވެއެވެ.' : 'No Publications for this category at the moment.' }}</p>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                @foreach ($items as $item)
                                <!--  RESOURCE ITEM START  -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <a href="{{ env('APP_URL') . '/publications/' . $slug . '/' . $item->id }}">
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
                                                            <p class="lang-{{ $language }} visible ml-2 mr-2"><i class="far fa-clock text-color-primary-dimm"></i><span class="pl-2 pr-2">{{ $item->created_at->diffForHumans() }}</span></p>
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
                            {{ $items->links() }}
                        </div>
                </div> <!-- / col-lg-8 -->
            </div> <!--row-->
        </div><!-- / container -->
    </div> <!-- / page-container -->
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
    </script>
    <script>
        window.addEventListener('languageEventDispatch', event => {
        });
    </script>
@endpush