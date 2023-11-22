<div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;">
    <div class="container-fluid pl-0 pr-0">
        @php 
            if(!empty(nova_get_setting('announcements_page_image' ))) {
                $image = getMedia(nova_get_setting('announcements_page_image'), null);
            } else {
                $image = getMedia(nova_get_setting('archive_page_image'), null);
            }
        @endphp
        @if($language == 'dh')
            @php \Carbon\Carbon::setLocale('dv'); @endphp
        @else 
            @php \Carbon\Carbon::setLocale('en'); @endphp
        @endif
      </div> <!-- / container-fluid -->
    <div class="container page-content no-image">
        <div class="page-title dark">
            <h2 class="mb-0 text-dark"></h2>
            <div class="mb-0 lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'ހޯދުނު ލިޔުންތައް' : 'Search Results' }}</h4></div>
        </div>
        <div class="page-search">
            <div style="width: 100%;" class="search-form pl-0 pr-0">
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
        </div>
        
        <div class="page-text ">
            @if($news_results->count() > 0)
                <div class="search-results-block">
                    <div class="row card-items-container">
                            <div class="col-lg-12">
                                <div class="section-title mt-3 with-bg pb-2">
                                    <div class="lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'ޚަބަރު' : 'News' }}</h4></div>
                                </div>
                            </div>
                            @foreach ($news_results as $item)
                                @php $item->route = 'single-news' @endphp
                                @include('templates.single.card', $item)
                            @endforeach
                    </div><!-- / row -->
                    <div class="pagination-container">
                        <div class="row d-flex justify-content-center">
                            {{ $news_results->links() }}
                        </div>
                    </div><!-- / pagination-container -->
                </div><!-- / search-results-block -->
            @endif
            @if($page_results->count() > 0)
                <div class="search-results-block">
                    <div class="row card-items-container">
                            <div class="col-lg-12">
                                <div class="section-title mt-3 with-bg pb-2">
                                    <div class="lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'ޕޭޖް' : 'Pages' }}</h4></div>
                                </div>
                            </div>
                            @foreach ($page_results as $item)
                                @php $item->route = 'page-manager' @endphp
                                @include('templates.single.page-card', $item)
                            @endforeach
                    </div><!-- / row -->
                    <div class="pagination-container">
                        <div class="row d-flex justify-content-center">
                            {{ $page_results->links() }}
                        </div>
                    </div><!-- / pagination-container -->
                </div><!-- / search-results-block -->
            @endif
            @if($gallery_results->count() > 0)
                <div class="search-results-block">
                    <div class="row card-items-container">
                            <div class="col-lg-12">
                                <div class="section-title mt-3 with-bg pb-2">
                                    <div class="lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'ގެލެރީ' : 'Galleries' }}</h4></div>
                                </div>
                            </div>
                            @foreach ($gallery_results as $item)
                                @php $item->route = 'single-gallery' @endphp
                                @include('templates.single.gallery-card', $item)
                            @endforeach
                    </div><!-- / row -->
                    <div class="pagination-container">
                        <div class="row d-flex justify-content-center">
                            {{ $gallery_results->links() }}
                        </div>
                    </div><!-- / pagination-container -->
                </div><!-- / search-results-block -->
            @endif
            @if($project_results->count() > 0)
                <div class="search-results-block">
                    <div class="row card-items-container">
                            <div class="col-lg-12">
                                <div class="section-title mt-3 with-bg pb-2">
                                    <div class="lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'މަޝްރޫއުތައް' : 'Projects' }}</h4></div>
                                </div>
                            </div>
                            @foreach ($project_results as $item)
                                @php $item->route = 'single-project' @endphp
                                @include('templates.single.project-card', $item)
                            @endforeach
                    </div><!-- / row -->
                    <div class="pagination-container">
                        <div class="row d-flex justify-content-center">
                            {{ $project_results->links() }}
                        </div>
                    </div><!-- / pagination-container -->
                </div><!-- / search-results-block -->
            @endif
            @if($download_results->count() > 0)
                <div class="search-results-block">
                    <div class="row card-items-container">
                            <div class="col-lg-12">
                                <div class="section-title mt-3 with-bg pb-2">
                                    <div class="lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'ޑައުންލޯޑް' : 'Downloads' }}</h4></div>
                                </div>
                            </div>
                            @foreach ($download_results as $item)
                                @include('templates.single.download-list', $item)
                            @endforeach
                    </div><!-- / row -->
                    <div class="pagination-container">
                        <div class="row d-flex justify-content-center">
                            {{ $download_results->links() }}
                        </div>
                    </div><!-- / pagination-container -->
                </div><!-- / search-results-block -->
            @endif
            @if($publication_results->count() > 0)
                <div class="search-results-block">
                    <div class="row card-items-container">
                            <div class="col-lg-12">
                                <div class="section-title mt-3 with-bg pb-2">
                                    <div class="lang-{{ $language }} visible"><h4>{{ $language == 'dh' ? 'ޕަބްލިކޭޝަންތައް' : 'Publications' }}</h4></div>
                                </div>
                            </div>
                            @foreach ($publication_results as $item)
                                <!--  RESOURCE ITEM START  -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <a href="{{ env('APP_URL') . '/publications/' . $item->publication_category->slug . '/' . $item->id }}">
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
                            @endforeach
                    </div><!-- / row -->
                    <div class="pagination-container">
                        <div class="row d-flex justify-content-center">
                            {{ $publication_results->links() }}
                        </div>
                    </div><!-- / pagination-container -->
                </div><!-- / search-results-block -->
            @endif
            
        </div> <!-- / page-text -->
    </div><!-- / container -->
</div> <!-- / page-container -->