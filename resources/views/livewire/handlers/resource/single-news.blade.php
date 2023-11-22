@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!empty($data->title_en)) : 
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    else:
      $pageTitle = nova_get_setting('og_site_name');
    endif;
@endphp
@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
@section('archive-title')
{{ $data->title_en }} {{ ' - ' }}
@endsection
    <div {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="page-container article-detailed-view {{$language == 'dh' ? 'rtl' : 'ltr'}}" style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;" >

        <div class="container page-content no-image">
            <div class="row">
                <div class="col-12">
                  <div class="post-thumbnail">
                    <img src="{{ getMedia($data->image, null) }}">
                  </div>
                  <div class="page-title  pt-4">
                    <div class="page-title-inner">
                        <span class="lang-{{$language}} visible"><h4>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h4></span>
                      <div class="single-under-title d-flex">
                        
                        <div style="width: 100%;">
                          <div class="single-resource-meta">
                            <p class="lang-{{$language}} visible"><i class="far fa-clock"></i><span class="pr-2 pl-2">{{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse($data->created_at)->timestamp ) : Carbon\Carbon::parse($data->created_at)->format('d M Y - H:i') }}</span></p>
                          </div>
                          @php if(function_exists('hashSocialShare')): @endphp
                          {{ hashSocialShare($actual_link, $pageTitle) }}
                          @php endif; @endphp
                        </div> <!-- / row -->
          
                      </div> <!-- / single-under-title -->
                    </div><!-- / page-title-inner -->
                    
                  </div><!-- / page-title -->
                  
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                          <div class="page-text">
                            <span class="lang-{{$language}} visible">
                              <div class="row">
                                @if($language == 'dh')
                                  @foreach (json_decode($data->content_dh) as $item)     
                                    @include('layouts/resource-blocks')
                                  @endforeach
                                @elseif($language == 'en')
                                  @foreach (json_decode($data->content_en) as $item)     
                                    @include('layouts/resource-blocks')
                                  @endforeach
                                @endif
                              </div><!--row-->
                            </span><!--lang-->
                          </div> <!-- / page-text -->
                        </div> <!-- / col-lg-8 -->
                        <div class="col-lg-4">
                          <div class="sidebar">
                            @if ($items->count() > 0)
                              <div class="widget">
                                <div class="widget-container">
                                  <div class="lang-{{ $language }} visible"><h5 class="widget-title with-bg">{{ $language == 'dh' ? 'އިތުރު ލިޔުންތައް' : 'Other Articles' }}</h5></div>
                                  <div class="widget-content">
                                    
                                    <div class="row">
                                      
                                      @foreach ($items->slice(0, 5) as $item)

                                        @if( $item->id !== $data->id )
                                          
                                          <!--  LIST ITEM -->
                                          <div class="col-lg-12 col-md-12 col-sm-12 list-item ">
                                              <a href="{{ route('single-news', $item->id) }}">
                                                  <div class="thumbnail">
                                                      <img src="{{ getMedia($item->image, 'normal-thumbnail') }}">
                                                  </div><!--thumbnail-->
                                                  <div class="list-item-text-container pr-3">
                                                      <div class="title">
                                                        <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
                                                      </div> <!--title-->
                                                      <div class="meta">
                                                          <div class="row">
                                                              <div class="col-12">
                                                                <p class="lang-{{ $language }} visible"><i class="far fa-clock text-color-primary-dimm"></i><span class="pl-2 pr-2">{{ $item->created_at->diffForHumans() }}</span></p>
                                                              </div>
                                                          </div>
                                                      </div><!-- / meta -->
                                                  </div><!-- list-item-text-container -->
                                              </a>
                                          </div><!-- / col-lg-12 list-item -->
                                          <!--  / LIST ITEM  END  -->   
                                        @endif

                                      @endforeach

                                    </div><!--row-->
                                    
                                  </div>
                                </div>
                              </div>
                            @endif
                            <!--Sidebar widgets here-->
                            {{-- <x-sidebar-component :data="$side_bar->content"/> --}}
                            
                          </div>
                          
                        </div> <!-- / col-lg-4 -->
                    </div> <!--row-->
                </div><!-- / col-12 -->       
            </div> <!-- / row -->
        </div><!-- / container -->
    </div> <!-- / page-container -->   