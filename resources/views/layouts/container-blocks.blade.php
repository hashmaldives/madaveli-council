<div class="@if(!empty($item->attributes->column)) {{'col-lg-'.$item->attributes->column}} @endif">
    @if($language == 'dh')
        @php \Carbon\Carbon::setLocale('dv'); @endphp
    @else 
        @php \Carbon\Carbon::setLocale('en'); @endphp
    @endif
                @switch($item->layout)
                    
                    @case('richtext')
                        <div class="block-container mb-3">{!! $item->attributes->content !!}</div>
                    @break
                    @case('spacerlayout')
                        <div style="height: {{$item->attributes->height}}px;" class="block-container spacer-block"></div>
                    @break
                    @case('specialtextbox')
                        <div class="block-container mb-3">
                            @if(!empty($item->attributes->title))
                                <h5 class="item-title">
                                {{ $item->attributes->title }}
                                </h5>
                            @endif
                            <div class="mt-2 special-text-box {{ $item->attributes->color_scheme }}">
                                {!! $item->attributes->content !!}
                            </div>
                        </div>
                    @break
                    @case('infoboxlayout')
                        <div class="block-container mb-3">
                            @if(!empty($item->attributes->title))
                                <h5 class="item-title">
                                {{ $item->attributes->title }}
                                </h5>
                            @endif
                            <div class="mt-2 info-box {{ $item->attributes->type }} alert alert-{{ $item->attributes->type }}" role="alert">
                                <div class="icon-container">
                                    <i class="{{ $item->attributes->icon }}"></i>
                                </div>
                                <div class="text-container">
                                    {!! $item->attributes->content !!}
                                </div>
                            </div>
                        </div>
                    @break
                    @case('buttonlayout')
                        <div class="block-container mb-2 mt-2 d-flex {{ $item->attributes->align }}">
                            @php 
                                if(!empty($item->attributes->external_link)) :
                                    $external_link_status = $item->attributes->external_link;
                                else : 
                                    $external_link_status = 0;
                                endif;
                                if( $item->attributes->target == 1 ) :
                                    $target = 'target=_blank';
                                else : 
                                    $target = 'target=_self';
                                endif;
                                
                            @endphp
                            @if($external_link_status == 1)
                                <a class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" {{ $target }} href="{{ $item->attributes->url }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i>&nbsp;@endif{{ $item->attributes->title }}</a>
                            @else
                                <a class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" {{ $target }} href="{{ env('APP_URL'). '/' .$item->attributes->url }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i>&nbsp;@endif{{ $item->attributes->title }}</a>
                            @endif
                        </div>
                    @break
                    @case('attachmentbuttonlayout')
                        <div class="block-container mb-2">
                            <a class="btn  btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" target="_blank" href="{{ getMedia($item->attributes->attachment, null) }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i>&nbsp;@endif{{ $item->attributes->title }}</a>
                        </div>
                    @break
                    @case('cardlayout')
                        @php 
                            if(!empty($item->attributes->external_link)) :
                                $external_link_status = $item->attributes->external_link;
                            else : 
                                $external_link_status = 0;
                            endif;
                            if($external_link_status == 1) :
                                $url = $item->attributes->url;
                            else : 
                                $url = env('APP_URL'). '/' .$item->attributes->url;
                            endif;
                        @endphp
                        <div class="block-container">
                            <!--  CARD ITEM START  -->
                            <div class="card-item">
                                @if(!empty($item->attributes->url))
                                @php 
                                    if( $item->attributes->target == 1 ) :
                                        $target = 'target="_blank"';
                                    else : 
                                        $target = 'target="_self"';
                                    endif
                                @endphp
                                <a {{ $target }} href="{{ $url }}">
                                @endif
                                    <div class="thumbnail zoh">
                                        @php 
                                            if (!empty($item->attributes->image)) : 
                                                $image = getMedia($item->attributes->image, 'normal-thumbnail');
                                            else :
                                                $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                                            endif;
                                        @endphp
                                        <img src="{{ $image }}" alt="">
                                        
                                    </div><!--thumbnail-->
                                    <div class="text">
                                        @if(!empty($item->attributes->title))
                                        <div class="title">
                                            <h6>{{ $item->attributes->title }}</h6>
                                        </div>
                                        @endif
                                        <!--title-->
                                        @if(!empty($item->attributes->content))
                                        <div class="excerpt">
                                            {!! $item->attributes->content !!}
                                        </div>
                                        @endif
                                    </div><!--text-->
                                @if(!empty($item->attributes->url))
                                </a>
                                @endif
                            </div>
                            <!--  CARD ITEM END  -->
                        </div>
                    @break
                    @case('listlayout')
                        @php 
                            if(!empty($item->attributes->external_link)) :
                                $external_link_status = $item->attributes->external_link;
                            else : 
                                $external_link_status = 0;
                            endif;
                            if($external_link_status == 1) :
                                $url = $item->attributes->url;
                            else : 
                                $url = env('APP_URL'). '/' .$item->attributes->url;
                            endif;
                        @endphp
                        <div class="block-container">
                            <!--  LIST ITEM -->
                            <div class="list-item">
                                @if(!empty($item->attributes->url))
                                @php 
                                    if( $item->attributes->target == 1 ) :
                                        $target = 'target="_blank"';
                                    else : 
                                        $target = 'target="_self"';
                                    endif
                                @endphp
                                <a {{ $target }} href="{{ $url }}">
                                @endif
                                    <div class="thumbnail">
                                        @php 
                                            if (!empty($item->attributes->image)) : 
                                                $image = getMedia($item->attributes->image, 'normal-thumbnail');
                                            else :
                                                $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                                            endif;
                                        @endphp
                                        <img src="{{ $image }}" alt="">
                                    </div>
                                    <!--thumbnail-->
                                    <div class="list-item-text-container pr-3">
                                        @if(!empty($item->attributes->title))
                                        <div class="title">
                                            <h5>{{ $item->attributes->title }}</h5>
                                        </div>
                                        @endif
                                        <!--title-->
                                        @if(!empty($item->attributes->content))
                                        <div class="excerpt">
                                            {!! $item->attributes->content !!}
                                        </div>
                                        @endif
                                    </div><!-- list-item-text-container -->
                                @if(!empty($item->attributes->url))
                                </a>
                                @endif
                            </div><!-- / col-lg-12 list-item -->
                            <!--  / LIST ITEM  END  -->
                        </div>
                    @break
                    @case('image')
                        @php 
                            if(!empty($item->attributes->external_link)) :
                                $external_link_status = $item->attributes->external_link;
                            else : 
                                $external_link_status = 0;
                            endif;
                            if($external_link_status == 1) :
                                $url = $item->attributes->url;
                            else : 
                                $url = env('APP_URL'). '/' .$item->attributes->url;
                            endif;
                            
                        @endphp
                        @if (!empty($item->attributes->url))
                            @php 
                                if( $item->attributes->target == 1 ) :
                                    $target = 'target="_blank"';
                                else : 
                                    $target = 'target="_self"';
                                endif
                            @endphp
                            <div class="block-container mb-3 image-block">
                                <a {{ $target }} href="{{ $url }}">
                                    <img src="{{ getMedia($item->attributes->image, null) }}">
                                </a>
                            </div>
                        @else
                            <div class="block-container mb-3 image-block">
                                <img src="{{ getMedia($item->attributes->image, null) }}" alt="">
                            </div>
                        @endif
                    @break
                    @case('gallerylayout')
                    <div class="titleandtextblock block-container mb-3">
                        <div class="text-container">
                            @if(!empty($item->attributes->title))
                                <h5 class="item-title">
                                    {{ $item->attributes->title }}
                                </h5>
                            @endif
                            @if(!empty($item->attributes->excerpt))
                                <div class="content pt-3">
                                    {!! $item->attributes->excerpt !!} 
                                </div>
                            @endif
                            <div class="gallery-container pt-3">
                                <div class="row">
                                        @if(!empty($item->attributes->image_columns))
                                            @php 
                                                $gallery_cols = $item->attributes->image_columns;
                                            @endphp
                                        @else
                                            @php 
                                                $gallery_cols = '3';
                                            @endphp
                                        @endif
                                    @foreach ($item->attributes->images as $item)
                                        <div class="col-lg-{{ $gallery_cols }} col-md-6 col-12 pt-3 pb-3">
                                            <a data-fancybox="gallery" href="{{ getMedia($item, null) }}">
                                                <img src="{{ getMedia($item, 'medium-thumbnail') }}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                </div><!--row-->
                            </div>
                        </div>
                    </div>
                    @break
                    @case('usercard')
                    <!--  CARD ITEM START  -->
                    <div class="user-card-wrapper">
    
                        <div class="user-card">
    
                            <div class="profile-picture-container d-flex justify-content-center">
                                <div class="profile-picture zoh">
                                    @php 
                                        if (!empty($item->attributes->image)) : 
                                            $profilePicture = getMedia($item->attributes->image, null);
                                        else :
                                            $profilePicture = getMedia(nova_get_setting('fallback_user_image'), null);
                                        endif;
                                    @endphp
                                    <img src="{{ $profilePicture }}">
                                </div><!--thumbnail-->
                            </div>
                            
                            <div class="text">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="name">
                                            <h6 class="gradient-text">{{ $item->attributes->name }}</h6>
                                        </div> <!--name-->
                                        <p class="text-center position">{{ $item->attributes->position }}</p>
                                        @if(!empty($item->attributes->bio))
                                        <div class="bio">
                                            <p>
                                                {{ $item->attributes->bio }}
                                            </p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div><!-- / meta -->
                
                        </div><!--col-lg-6 card-item-->
    
                    </div><!--  user-card-wrapper  -->
                    
                    <!--  CARD ITEM END  -->
                    @break
                    @case('contactcardlayout')
                        <div class="contactcard block-container mb-5">
                        <div class="text-container">
                            <h5 class="item-title">
                            {{ $item->attributes->title }}
                            </h5>
                            <div class="content pt-3">
                            @if( !empty($item->attributes->address) )
                                <p class="item"><i class="fas fa-home"></i>&nbsp;{{ $item->attributes->address }}</p>
                            @endif
                            @if( !empty($item->attributes->phone) )
                                <p class="item"><i class="fas fa-phone"></i>&nbsp;{{ $item->attributes->phone }}</p>
                            @endif
                            @if( !empty($item->attributes->hotline) )
                                <p class="item"><i class="fas fa-mobile-alt"></i>&nbsp;{{ $item->attributes->hotline }}</p>
                            @endif
                            @if( !empty($item->attributes->fax) )
                                <p class="item"><i class="fas fa-fax"></i>&nbsp;{{ $item->attributes->fax }}</p>
                            @endif
                            @if( !empty($item->attributes->email) )
                                <p class="item"><i class="fas fa-envelope"></i>&nbsp;{{ $item->attributes->email }}</p>
                            @endif
                            </div>
                        </div>
                        
                        </div>
                    @break
                    @case('pdfviewerlayout')
                        <?php $rand_id = rand(); ?>
                        <div class="block-container mb-5">
                            <div class="pdf-embedd-container" id="pdfembedd<?php echo $rand_id; ?>"></div>
                            <script>
                                WebViewer({
                                  path: '{{ asset('vendor/pdfjsexpress/lib') }}', // path to the PDF.js Express'lib' folder on your server
                                  licenseKey: '{{ nova_get_setting('pdf_express_api_key') }}',
                                  initialDoc: '{{ getMedia($item->attributes->attachment, null) }}',
                                  // initialDoc: '/path/to/my/file.pdf',  // You can also use documents on your server
                                }, document.getElementById('pdfembedd@php echo $rand_id; @endphp'))
                                .then(instance => {
                                  // now you can access APIs through the WebViewer instance
                                  const { Core, UI } = instance;
                                  //instance.UI.setTheme('dark');
                                });
                            </script>
                        </div>
                    @break
                    @case('youtubevideo')
                        <div class="titleandtextblock block-container mb-5">
                            <div class="text-container">
                                @if(!empty($item->attributes->title))
                                <h5 class="gallery-video-title">
                                    {{ $item->attributes->title }}
                                </h5>
                                @endif
                                <!DOCTYPE html>
                                <html>
                                <head>
                                </head>
                                <body>
                                <div class="responsiveRapper">
                                    <iframe width="" height="315" src="https://www.youtube.com/embed/{{ $item->attributes->youtube_video_id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </body>
                                </html>
                                
                            </div>
                        
                        </div>
                    @break
                    @case('video')
                        <div class="titleandtextblock block-container mb-5">
                            <div class="text-container">
                                @if(!empty($item->attributes->title))
                                <h5 class="item-title">
                                    {{ $item->attributes->title }}
                                </h5>
                                @endif
                                <!DOCTYPE html>
                                <html>
                                <head>
                                </head>
                                <body>
                                <div class="responsiveRapper">
                                    <iframe width="" height="315" src="{{ getMedia($item->attributes->video, null) }}">
                                    </iframe>
                                </div>
                                </body>
                                </html>
                                
                            </div>
                        
                        </div>
                    @break
                    @case('timelinelayout')
                        <div class="titleandtextblock block-container mb-3">
                            <div class="text-container">
                                @if(!empty($item->attributes->title))
                                <h5 class="item-title">
                                    {{ $item->attributes->title }}
                                </h5>
                                @endif
                                <div class="content pt-3">
    
                                    <div class="hash-timeline timeline {{$language == 'dh' ? 'rtl' : 'ltr' }}">
                                        <div class="timeline-start"></div>
    
                                        @foreach ($item->attributes->timeline_items as $item)
                                            <div class="timeline-block">
                                                <div class="item-mark"></div>
    
                                                <div class="timeline-content">
                                                    <h2 class="text-color-primary">{{ $item->attributes->title }}</h2>
                                                    @if(!empty($item->attributes->date))
                                                    <span class="item-date">
                                                        {{ Carbon\Carbon::parse($item->attributes->date)->translatedFormat('d M Y') }}
                                                    </span>
                                                    @endif
                                                    <div class="text">
                                                        {!! $item->attributes->content !!} 
                                                    </div>
                                                </div> <!-- cd-timeline-content -->
                                                
                                            </div> <!-- cd-timeline-block -->
                                        @endforeach
    
                                        <div class="timeline-end"></div>
                                    </div><!-- / hash-timeline -->
                                </div>
                            </div>
                        </div>
                    @break
                    @case('statitemlayout')
                        <!--  CARD ITEM START  -->
                        <div class="mb-3 stat-item mb-3 mt-3">
                            <div class="stat-item-inner">
                                <div class="value-container d-block">
                                    <h1>{{ $item->attributes->value }}</h1>
                                </div>
                                <div class="title">
                                    <h6>{{ $item->attributes->title }}</h6>
                                </div>
                                <!--title-->
                            </div>
                        </div>
                        <!--col-lg-6 card-item-->
                        <!--  CARD ITEM END  -->
                    @break
                    @case('sectionheadinglayout')
                        @php 
                            if(!empty($item->attributes->external_link) && !empty($item->attributes->url)) :
                                $external_link_status = $item->attributes->external_link;
                            else : 
                                $external_link_status = 0;
                            endif;
                            if($external_link_status == 1) :
                                $url = $item->attributes->url;
                            else : 
                                $url = env('APP_URL'). '/' .$item->attributes->url;
                            endif;
                            
                        @endphp
                        @if (!empty($item->attributes->url))
                            @php 
                                if( $item->attributes->target == 1 ) :
                                    $target = 'target=_blank';
                                else : 
                                    $target = 'target=_self';
                                endif
                            @endphp
                            <div class="block-container mb-2 section-title {{ $item->attributes->text_align }} text-dark position-relative">
                                <a {{ $target }} class="text-color-primary" href="{{ $url }}"><h4 class="text-color-primary">{{ $item->attributes->title }} <i class="fa-solid fa-link"></i></h4></a>
                            </div>
                        @else
                            <div class="block-container mb-2 section-title {{ $item->attributes->text_align }} text-dark position-relative">
                                <h4 class="">{{ $item->attributes->title }}</h4>
                            </div>
                        @endif
                        
                    @break
                    @case('newsresourcelayout')
                    <div class="row home-page-elements">
                        @php $items = $item->attributes->number_of_items @endphp
                        @foreach ($news->slice(0, $items) as $data)
    
                            <!--  CARD ITEM START  -->
                            <div class="col-lg-{{ $item->attributes->items_per_row }} col-md-6 col-6 card-item">
                                <a href="{{ route('single-news', $data->id) }}">
                                    <div class="thumbnail zoh">
                                        @php 
                                            if (!empty($data->image)) : 
                                                $image = getMedia($data->image, 'normal-thumbnail');
                                            else :
                                                $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                                            endif;
                                        @endphp
                                        <img src="{{ $image }}" alt="">
                                        
                                    </div><!--thumbnail-->
                                    <div class="meta">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>
                                                    <i class="far fa-clock text-color-primary-dimm"></i>
                                                    <span class="pr-2 pl-2">{{ $data->created_at->diffForHumans() }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- / meta -->
                                    <div class="lang-{{$language}} visible title">
                                        <h6>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h6>
                                    </div>
                                </a>
                            </div>
                            <!--  CARD ITEM END  -->
    
                        @endforeach
    
                    </div> <!-- / row home-page-elements -->
                    @break
                    @case('eventsresourcelayout')
                    <div class="row home-page-elements">
                        @php $items = $item->attributes->number_of_items @endphp
                        @foreach ($events->slice(0, $items) as $data)
    
                            @php
                            $todayDate = date('Y-m-d h:i:s');
            
                            $eventDay = Carbon\Carbon::parse($data->startdate)->translatedFormat('dS M');
    
                            $eventStartTime = Carbon\Carbon::parse($data->startdate)->translatedFormat('H:i');
                            $eventEndTime = Carbon\Carbon::parse($data->enddate)->translatedFormat('H:i');
                            
                            if($todayDate >= $data->startdate){
                                $active = "inactive";
                            } else {
                                $active = "active";
                            }
                            @endphp
                            <!--  CARD ITEM START  -->
                            <div class="col-lg-{{ $item->attributes->items_per_row }} col-md-6 col-sm-12 event-card">
                                <a href="/events/{{ $data->id }}">
                                    <div class="thumbnail zoh">
                                        @php 
                                            if (!empty($data->image)) : 
                                                $image = getMedia($data->image, 'large-thumbnail');
                                            else :
                                                $image = getMedia(nova_get_setting('fallback_element_image'), 'large-thumbnail');
                                            endif;
                                        @endphp
                                        <img src="{{ $image }}">
                                        <div class="active-status {{ $active }}"></div>
                                        <div class="meta">
                                            <div class="meta-inner">
                                                <p>
                                                    <i class="far fa-calendar-check fa-lg"></i>
                                                    <span>
                                                        {{ $eventDay }} | {{ $eventStartTime }} - {{ $eventEndTime }}
                                                    </span>
                                                </p>
                                                <p><i class="fas fa-map-marker-alt fa-lg"></i> {{ $language == 'dh' ? $data->venue_dh : $data->venue_en }}</p>
                                            </div>
                                        </div><!-- / meta -->
                                    </div>
                                    <!--thumbnail-->
                                    <div class="text">
                                        <div class="lang-{{$language}} visible title">
                                            <h6>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h6>
                                        </div>
                                    </div><!--text-->
                                </a>
                            </div>
                            <!--col-lg-6 card-item-->
                            <!--  CARD ITEM END  -->
    
                        @endforeach
    
                    </div> <!-- / row home-page-elements -->
                    @break
                    @case('galleryresourcelayout')
                        <div class="row home-page-elements">
                            @php $items = $item->attributes->number_of_items; @endphp
                            @foreach ($galleries->slice(0, $items) as $data)
                                @php 
                                    if($data->type == 'image') {
                                        $icon = '<i class="fas fa-camera"></i>';
                                    } elseif($data->type == 'video') {
                                        $icon = '<i class="fas fa-video"></i>';
                                    } elseif($data->type == 'photovideo') {
                                        $icon = '<i class="fas fa-photo-video"></i>';
                                    } else {
                                        $icon = '<i class="fas fa-camera pl-2"></i>';
                                    }
                                    $items = $item->attributes->number_of_items;
                                @endphp
                                <!--  CARD ITEM START  -->
                                <div class="col-lg-{{ $item->attributes->items_per_row }} col-md-6 col-6 gallery-card-item">
                                    <a href="{{ route('single-gallery', $data->id) }}">
                                        <div class="thumbnail zoh">
                                            @php 
                                                if (!empty($data->image)) : 
                                                    $image = getMedia($data->image, 'normal-thumbnail');
                                                else :
                                                    $image = getMedia(nova_get_setting('fallback_element_image'), 'normal-thumbnail');
                                                endif;
                                            @endphp
                                            <img src="{{ $image }}">
                                            <div class="camera-icon">{!! $icon !!}</div>
                                        </div><!--thumbnail-->
                                        <div class="meta">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        <i class="far fa-clock text-color-primary-dimm"></i>
                                                        <span class="pr-2 pl-2">{{ $data->created_at->diffForHumans() }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- / meta -->
                                        <div class="lang-{{$language}} visible title pt-2">
                                            <h6>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h6>
                                        </div>
                                    </a>
                                </div>
                                <!--  CARD ITEM END  -->
    
                            @endforeach
    
                        </div> <!-- / row home-page-elements -->
                    @break
                    @case('projectresourcelayout')
                        <div class="row home-page-elements">
                            @php $items = $item->attributes->number_of_items @endphp
                            @foreach ($projects->slice(0, $items) as $data)
                                <!--  CARD ITEM START  -->
                                <div class="col-lg-{{ $item->attributes->items_per_row }} col-md-6 col-12 project-card">
                                    <a href="{{ route('single-project', $data->id) }}">
                                        <div class="thumbnail zoh">
                                            @php 
                                                if (!empty($data->image)) : 
                                                    $image = getMedia($data->image, 'large-thumbnail');
                                                else :
                                                    $image = getMedia(nova_get_setting('fallback_element_image'), 'large-thumbnail');
                                                endif;
                                            @endphp
                                            <img src="{{ $image }}">
                                            <div class="text">
                                                <div class="text-inner">
                                                    @if(!empty($data->project_status))
                                                    <span class="badge primary lang-{{$language}} visible"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $data->project_status->title_dh : $data->project_status->title_en }}</span>
                                                    @endif
                                                    @if(!empty($data->project_category))
                                                    <span class="badge light lang-{{$language}} visible"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $data->project_category->title_dh : $data->project_category->title_en }}</span>
                                                    @endif
                                                    <div class="lang-{{$language}} visible title pt-2">
                                                        <h6>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h6>
                                                    </div>
                                                    <div class="meta">
                                                        <p>
                                                            <i class="far fa-calendar-check fa-lg"></i>
                                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? ThaanaDate::format('j M Y', Carbon\Carbon::parse($data->start_date)->timestamp) : Carbon\Carbon::parse($data->start_date)->format('d M Y') }}</span>
                                                          </p>
                                                    </div><!-- / meta -->
                                                </div><!-- / text-inner -->
                                            </div><!--text-->
                                            @if(!empty($data->project_completion_percentage))
                                            <div class="project-progress-container {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
                                                <p>{{ $data->project_completion_percentage }} %</p>
                                                <div class="project-progress">
                                                    <div class="progress-bar" style="width: {{ $data->project_completion_percentage }}%;"></div>
                                                </div><!--project-progress-->
                                            </div><!--project-progress-container-->
                                            @endif
                                        </div>
                                        <!--thumbnail-->
                                    </a>
                                </div>
                                <!--col-lg-6 card-item-->
                                <!--  CARD ITEM END  -->
                            @endforeach
                        </div> <!-- / row home-page-elements -->
                    @break
                    @case('facebookfeedlayout')
                        <div class="widget">
                        <div class="widget-container">
                            <h5 class="widget-title with-bg">
                            {{ $item->attributes->title }}
                            </h5>
                            <div class="widget-content">
                            <div class="fb-page pt-3" data-href="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/{{ $item->attributes->facebook_handler }}/">{{ $item->attributes->facebook_handler }}</a></blockquote></div>
                            </div>
                        </div>
                        
                        </div>
                    @break
                    @case('twitterfeedlayout')
                        <div style="max-height: 500px; overflow: auto;" class="block-container mb-3">
                            <a class="twitter-timeline" href="https://twitter.com/{{ $item->attributes->twitter_handler }}?ref_src=twsrc%5Etfw">Tweets by {{ $item->attributes->twitter_handler }}</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                        </div>
                    @break
                    @case('councilresourcelayout')
                        @php 
                        $publicationData = [];
                        @endphp
                        @foreach ($publications as $data)
                            @if($item->attributes->category == $data->publication_category->slug )
                                @php $publicationData[] = $data @endphp
                            @endif
                        @endforeach
                        {{-- {{dd($publicationData)}} --}}
                        <div class="block-container">
                            <div class="row home-page-elements">
                                @foreach ($publicationData as $key=> $data)
                                @php if($key == $item->attributes->number_of_items) break; @endphp
                                    <!--  RESOURCE ITEM START  -->
                                    <div class="col-lg-{{ $item->attributes->items_per_row }} col-md-6 col-12">
                                        <a href="{{ env('APP_URL') . '/publications/' . $item->attributes->category . '/' . $data->id }}">
                                            <div class="publication-resource-item">
                                                <div class="publication-resource-icon">
                                                    <i class="fa-solid fa-file"></i>
                                                </div><!-- / icon -->
                                                <div class="text">
                                                    <div class="title">
                                                        <div class="lang-{{ $language }} visible"><span>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</span></div>
                                                    </div>
                                                    <div class="meta">
                                                        <div class="row">
                                                            <div class="col-12 {{ $language == 'dh' ? 'text-right' : 'text-left' }}">
                                                                <p class="lang-{{ $language }} visible ml-2 mr-2"><i class="far fa-clock text-color-primary-dimm"></i><span class="pl-2 pr-2">{{ $data->created_at->diffForHumans() }}</span></p>
                                                            </div>
                                                        </div>
                                                    </div><!-- / meta -->
                                                </div><!-- / text -->
                                            </div>
                                        </a>
                                    </div>
                                    <!--  RESOURCE ITEM END  -->
                                @endforeach
                            </div> <!-- / row home-page-elements -->
                        </div><!-- / block-container -->
                    @break
                    @case('islandpopulationlayout')
                        <div style="height: 100%;" class="block-container d-flex align-items-center">
                            <div class="table-responsive">
                                <p>Last Updated At: {{ $language == 'dh' ? ThaanaDate::format('j M Y - H:i', Carbon\Carbon::parse(nova_get_setting('updated_at'))->timestamp ) : Carbon\Carbon::parse(nova_get_setting('updated_at'))->format('d M Y - H:i') }}</p>
                                <table class="table island-population">
                                    <thead>
                                        <tr>
                                            <th scope="col"><h6 style="margin: 0;">{{ $language == 'dh' ? 'އުމުރު' : 'Age Group'}}</h6></th>
                                            <th scope="col"><h6 style="margin: 0;">{{ $language == 'dh' ? 'ފިރިހެން' : 'Male'}}</h6></th>
                                            <th scope="col"><h6 style="margin: 0;">{{ $language == 'dh' ? 'އަންހެން' : 'Female'}}</h6></th>
                                            <th scope="col"><h6 style="margin: 0;">{{ $language == 'dh' ? 'ޖުމްލަ' : 'Total'}}</h6></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h6 style="margin: 0;">{{ $language == 'dh' ? '18 އަހަރުން ދަށު' : '18 & Below'}}</h6></td>
                                            <td><p style="margin: 0;">{{ nova_get_setting('m_18_and_below') }}</p></td><!--Male-->
                                            <td><p style="margin: 0;">{{ nova_get_setting('f_18_and_below') }}</p></td><!--Female-->
                                            @php 
                                                $TOTbelow18 = nova_get_setting('m_18_and_below') + nova_get_setting('f_18_and_below');
                                            @endphp
                                            <td><h6 style="margin: 0;">{{ $TOTbelow18 }}</h6></td><!--Total-->
                                        </tr>
                                        <tr>
                                            <td><h6 style="margin: 0;">18 - 35</h6></td>
                                            <td><p style="margin: 0;">{{ nova_get_setting('m_18_35') }}</p></td><!--Male-->
                                            <td><p style="margin: 0;">{{ nova_get_setting('f_18_35') }}</p></td><!--Female-->
                                            @php 
                                                $TOT18_35 = nova_get_setting('m_18_35') + nova_get_setting('f_18_35');
                                            @endphp
                                            <td><h6 style="margin: 0;">{{ $TOT18_35 }}</h6></td><!--Total-->
                                        </tr>
                                        <tr>
                                            <td><h6 style="margin: 0;">36 - 64</h6></td>
                                            <td><p style="margin: 0;">{{ nova_get_setting('m_36_64') }}</p></td><!--Male-->
                                            <td><p style="margin: 0;">{{ nova_get_setting('f_36_64') }}</p></td><!--Female-->
                                            @php 
                                                $TOT36_64 = nova_get_setting('m_36_64') + nova_get_setting('f_36_64');
                                            @endphp
                                            <td><h6 style="margin: 0;">{{ $TOT36_64 }}</h6></td><!--Total-->
                                        </tr>
                                        <tr>
                                            <td><h6 style="margin: 0;">{{ $language == 'dh' ? '65 އަހަރުން މަތި' : '65 & Above'}}</h6></td>
                                            <td><p style="margin: 0;">{{ nova_get_setting('m_64_and_above') }}</p></td><!--Male-->
                                            <td><p style="margin: 0;">{{ nova_get_setting('f_64_and_above') }}</p></td><!--Female-->
                                            @php 
                                                $TOTabove65= nova_get_setting('m_64_and_above') + nova_get_setting('f_64_and_above');
                                            @endphp
                                            <td><h6 style="margin: 0;">{{ $TOTabove65 }}</h6></td><!--Total-->
                                        </tr>
    
                                        <tr>
                                            @php 
                                                $TOTmale = nova_get_setting('m_18_and_below') + nova_get_setting('m_18_35') + nova_get_setting('m_36_64') + nova_get_setting('m_64_and_above');
                                                $TOTfemale = nova_get_setting('f_18_and_below') + nova_get_setting('f_18_35') + nova_get_setting('f_36_64') + nova_get_setting('f_64_and_above');
                                                $grandTOT = $TOTmale + $TOTfemale;
                                            @endphp
                                            <th class="text-bold"><h6 style="margin: 0;">{{ $language == 'dh' ? 'ޖުމްލަ' : 'Total'}}</h6></th>
                                            <th class="text-bold"><h6 style="margin: 0;">{{ $TOTmale }}</h6></th><!--Male-->
                                            <th class="text-bold"><h6 style="margin: 0;">{{ $TOTfemale }}</h6></th><!--Female-->
                                            <th class="text-bold"><h6 style="margin: 0;">{{ $grandTOT }}</h6></th><!--Total-->
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--table-responsive-->
                        </div>
    
                    @break
                    @case('islandpopulationpiechartlayout')
                        @php 
                            $rand_id = rand();
                            $TOTmale = nova_get_setting('m_18_and_below') + nova_get_setting('m_18_35') + nova_get_setting('m_36_64') + nova_get_setting('m_64_and_above');
                            $TOTfemale = nova_get_setting('f_18_and_below') + nova_get_setting('f_18_35') + nova_get_setting('f_36_64') + nova_get_setting('f_64_and_above');
                            $grandTOT = $TOTmale + $TOTfemale;
                        @endphp
                        <div style="height: 100%;" class="block-container d-flex align-items-center">
                            <canvas id="pie{{ $rand_id }}" width="400" height="400"></canvas>
                                <script>
                                const ctx{{ $rand_id }} = document.getElementById('pie{{ $rand_id }}');
                                const myChart{{ $rand_id }} = new Chart(ctx{{ $rand_id }}, {
                                    type: 'pie',
                                    data: {
                                        labels: ['{{ $language == 'dh' ? 'ފިރިހެން' : 'Male'}}', '{{ $language == 'dh' ? 'އަންހެން' : 'Female'}}'],
                                        datasets: [{
                                            label: '',
                                            data: [{{ $TOTmale }}, {{ $TOTfemale }}],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                            ],
                                            borderWidth: 0.5
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        plugins: {
                                        legend: {
                                            position: 'bottom',
                                        },
                                        title: {
                                            display: false,
                                            text: ''
                                        }
                                        }
                                    },
                                });
                                </script>
    
                        </div>
                    @break
                    @case('islandinformationlayout')
                        @php 
                            $TOTmale = nova_get_setting('m_18_and_below') + nova_get_setting('m_18_35') + nova_get_setting('m_36_64') + nova_get_setting('m_64_and_above');
                            $TOTfemale = nova_get_setting('f_18_and_below') + nova_get_setting('f_18_35') + nova_get_setting('f_36_64') + nova_get_setting('f_64_and_above');
                            $grandTOT = $TOTmale + $TOTfemale;
                            $airport = getMap(nova_get_setting('closest_airport_id'));
                        @endphp
                        <div class="block-container d-flex align-items-center">
                            <div style="width: 100%;" class="island-information">
                                <div class="island-info-item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ގައުމު' : 'Country'}}</span>
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-7">
                                            <span class="lang-{{$language}} visible text-primary">{{ $language == 'dh' ? nova_get_setting('country_dh') : nova_get_setting('country_en')}}</span>
                                        </div><!--col-lg-6-->
                                    </div><!--row-->
                                </div><!--island-info-item-->
                                <div class="island-info-item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ބިމުގެ ބޮޑުމިން' : 'Land Area'}}</span>
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-7">
                                            <span class="lang-{{$language}} visible text-primary">{{ $language == 'dh' ? nova_get_setting('land_area') . ' ހެކްޓަރ' : nova_get_setting('land_area') . ' Hector'}}</span>
                                        </div><!--col-lg-6-->
                                    </div><!--row-->
                                </div><!--island-info-item-->
                                <div class="island-info-item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'އާބާދީ' : 'Population'}}</span>
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-7">
                                            <span class="text-primary">{{ $grandTOT }}</span>
                                        </div><!--col-lg-6-->
                                    </div><!--row-->
                                </div><!--island-info-item-->
                                <div class="island-info-item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ޕޯސްޓަލް ކޯޑް' : 'Postal Code'}}</span>
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-7">
                                            <span class="text-primary">{{ nova_get_setting('postal_code') }}</span>
                                        </div><!--col-lg-6-->
                                    </div><!--row-->
                                </div><!--island-info-item-->
                                <div class="island-info-item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'ޒިޕް ކޯޑް' : 'Zip Code'}}</span>
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-7">
                                            <span class="text-primary">{{ nova_get_setting('zip_code') }}</span>
                                        </div><!--col-lg-6-->
                                    </div><!--row-->
                                </div><!--island-info-item-->
                                <div class="island-info-item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? 'އެންމެ ކައިރީގައިވާ އެއާޕޯޓް' : 'Closest Airport'}}</span>
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-7">
                                            <span class="lang-{{$language}} visible"><a class="text-primary" href="/{{ nova_get_setting('airport_map_page_link') }}">{{ $language == 'dh' ? $airport->title_dh : $airport->title_en}} <i class="fa-solid fa-link"></i></a></span>
                                        </div><!--col-lg-6-->
                                    </div><!--row-->
                                </div><!--island-info-item-->
                            </div><!-- / island-information -->
                        </div>
    
                    @break
                    @case('tabslayout')
                        <div class="block-container mb-3">
                            @php $idname = ''; @endphp
                            <nav>
                                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                {{-- {{ var_dump($item) }} --}}
                                @foreach ($item->attributes->tabs as $key => $tab)
                                {{-- {{ dd($key ) }} --}}
                                    @php 
                                    if($tab->attributes->tab_active == 1) : 
                                        $activeStatus = "active";
                                    else :
                                        $activeStatus = "";
                                    endif;
                                    $id = md5($tab->attributes->title);
                                    @endphp
                                    <li class="nav-item">
                                    <a class="nav-link {{ $activeStatus }}" id="nav-id{{ $id }}-tab" data-toggle="tab" href="#nav-id{{ $id }}" role="tab" aria-controls="nav-id{{ $id }}" aria-selected="true">{{ $tab->attributes->title }}</a>
                                    </li>
                                @endforeach
                                </ul>
                            </nav>
    
                            <div class="tab-content pt-2 pl-1 pr-1" id="nav-tabContent">
                                @foreach ($item->attributes->tabs as $key => $tab)
                                    @php 
                                    if($tab->attributes->tab_active == 1) : 
                                        $activeStatus = "show active";
                                    else :
                                        $activeStatus = "";
                                    endif;
                                    $id = md5($tab->attributes->title);
                                    @endphp
                                <div class="tab-pane fade {{ $activeStatus }}" id="nav-id{{ $id }}" role="tabpanel" aria-labelledby="nav-id{{ $id }}-tab">
                                    <div class="row">
                                        @foreach ($tab->attributes->content as $item)   
                                        @include('layouts/resource-blocks')
                                        @endforeach
                                    </div><!--row-->
    
                                </div>
                                @endforeach
                            </div>
    
                        </div>
                    @break
                    @case('accordionlayout')
                        <div class="block-container mb-3">
                            {{-- {{ dd($item) }} --}}
                            @foreach ($item->attributes->tabs as $key => $tab)
                                @php 
                                    if($tab->attributes->tab_active == 1) : 
                                    $activeStatus = "show";
                                    $tabActive = 'collapsed';
                                    else :
                                    $activeStatus = "";
                                    $tabActive = '';
                                    endif;
                                    $id = $key;
                                @endphp
                                <div class="accordion dynamic-accordion" id="accordion{{ $id }}">
                                    <a class="overflow-auto d-block collapsed {{ $tabActive }}" type="button" data-toggle="collapse" data-target="#collapse{{ $id }}" aria-expanded="false" aria-controls="collapse{{ $id }}">
                                        <div class="dynamic-accordion-title overflow-auto">
                                            <span class="float-left"><h5 class="mb-0">{{ $tab->attributes->title }}</h5></span>
                                            <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                    </a>
                                    <div id="collapse{{ $id }}" class="collapse {{ $activeStatus }}" data-parent="#accordion{{ $id }}">
                                        <div class="row accordion-content">
                                            @foreach ($tab->attributes->content as $item)   
                                            @include('layouts/resource-blocks')
                                            @endforeach
                                        </div><!--row-->
                                    </div>
                                </div><!--/download-category-->
                            @endforeach
    
                        </div><!-- / block-container  -->
                    @break
                @endswitch
                
    </div>