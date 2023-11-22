<div class="@if(!empty($item->attributes->column)) {{'col-lg-'.$item->attributes->column}} @endif">
            @switch($item->layout)
                
                @case('richtext')
                    <div class="block-container mb-3 ">{!! $item->attributes->content !!}</div>
                @break
                @case('spacerlayout')
                    <div style="height: {{$item->attributes->height}}px;" class="block-container spacer-block"></div>
                @break
                @case('infoboxlayout')
                    <div class="block-container mb-3 ">
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
                    <div class="block-container mb-2 mt-2  d-flex {{ $item->attributes->align }}">
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
                            <a class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" {{ $target }} href="{{ $item->attributes->url }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i> @endif&nbsp;{{ $item->attributes->title }}</a>
                        @else
                            <a class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" {{ $target }} href="{{ env('APP_URL'). '/' .$item->attributes->url }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i> @endif&nbsp;{{ $item->attributes->title }}</a>
                        @endif
                    </div>
                @break
                @case('attachmentbuttonlayout')
                    <div class="block-container mb-2 ">
                        <a class="btn  btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" target="_blank" href="{{ getMedia($item->attributes->attachment, null) }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i> @endif&nbsp;{{ $item->attributes->title }}</a>
                    </div>
                @break
                @case('titleandtext')
                    <div class="titleandtextblock block-container mb-3 ">
                    <div class="text-container">
                        <h5 class="item-title">
                        {{ $item->attributes->title }}
                        </h5>
                        <div class="content pt-3">
                        {!! $item->attributes->content !!} 
                        </div>
                    </div>
                    
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
                    <div class="block-container ">
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
                                </div><!--thumbnail-->
                                
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
                    <div class="block-container ">
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
                                        <h6>{{ $item->attributes->title }}</h6>
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
                @case('usercard')
                <!--  CARD ITEM START  -->
                <div class="user-card-wrapper">

                    <div class="member-item ">

                        <div class="cover">
                            <div class="profile-picture">
                                @php 
                                    if (!empty($item->attributes->image)) : 
                                        $profilePicture = getMedia($item->attributes->image, null);
                                    else :
                                        $profilePicture = getMedia(nova_get_setting('fallback_user_image'), null);
                                    endif;
                                @endphp
                                <img src="{{ $profilePicture }}" alt="">
                            </div><!--thumbnail-->
                        </div>
                        
                        <div class="meta">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">
                                        <h5 class="gradient-text">{{ $item->attributes->name }}</h5>
                                    </div> <!--title-->
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
                    <div class="contactcard block-container mb-5 ">
                    <div class="text-container">
                        <h5 class="item-title">
                        {{ $item->attributes->title }}
                        </h5>
                        <div class="content pt-3">
                        @if( !empty($item->attributes->address) )
                            <p class="item"><i class="fas fa-home"></i>&nbsp;{{ $item->attributes->address }}</p>
                        @endif
                        @if( !empty($item->attributes->phone) )
                            <p class="item"><i class="fas fa-phone fa-flip-horizontal"></i>&nbsp;{{ $item->attributes->phone }}</p>
                        @endif
                        @if( !empty($item->attributes->hotline) )
                            <p class="item"><i class="fas fa-mobile-alt"></i>&nbsp;{{ $item->attributes->hotline }}</p>
                        @endif
                        @if( !empty($item->attributes->fax) )
                            <p class="item"><i class="fas fa-fax"></i>&nbsp;{{ $item->attributes->fax }}</p>
                        @endif
                        @if( !empty($item->attributes->email) )
                            <p class="item"><i class="fas fa-envelope"></i>&nbsp;<span>{{ $item->attributes->email }}</span></p>
                        @endif
                        </div>
                    </div>
                    
                    </div>
                @break
                @case('titleandjscode')
                    <div class="titleandtextblock block-container mb-5 ">
                    <div class="text-container">
                        <h5 class="item-title">
                        {{ $item->attributes->title }}
                        </h5>
                        <div class="content pt-3">
                        {!! $item->attributes->js-code !!} 
                        </div>
                    </div>
                    
                    </div>
                @break
                @case('youtubevideo')
                    <div class="titleandtextblock block-container mb-5 ">
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
                                <iframe width="" height="315" src="https://www.youtube.com/embed/{{ $item->attributes->youtube_video_id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            </body>
                            </html>
                            
                        </div>
                    
                    </div>
                @break
                @case('statitemlayout')
                    <!--  CARD ITEM START  -->
                    <div class="mb-3 stat-item  mb-3 mt-3">
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
                        <div class="block-container mb-2  section-title {{ $item->attributes->text_align }} text-dark position-relative">
                            <a {{ $target }} class="text-color-primary" href="{{ $url }}"><h4 class="text-color-primary">{{ $item->attributes->title }}</h4></a>
                        </div>
                    @else
                        <div class="block-container mb-2  section-title {{ $item->attributes->text_align }} text-dark position-relative">
                            <h4 class="">{{ $item->attributes->title }}</h4>
                        </div>
                    @endif
                    
                @break
                @case('facebookfeedlayout')
                    <div class="widget ">
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
                @case('tabslayout')
                    <div class="block-container mb-3 ">
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
                    <div class="block-container mb-3 ">
                        {{-- {{ dd($item) }} --}}
                        @foreach ($item->attributes->tabs as $key => $tab)
                            @php 
                                if($tab->attributes->tab_active == 1) : 
                                $activeStatus = "show";
                                else :
                                $activeStatus = "";
                                endif;
                                $id = $key;
                            @endphp
                            <div class="accordion dynamic-accordion" id="accordion{{ $id }}">
                                <a class="overflow-auto d-block" type="button" data-toggle="collapse" data-target="#collapse{{ $id }}" aria-expanded="false" aria-controls="collapse{{ $id }}">
                                    <div style="background-image: url( {{ getMedia(nova_get_setting('website_pattern_white'), null) }} ), linear-gradient(22deg, #04a2c6 0%, #04bdc6 44%, #04c6ac 95%);" class="dynamic-accordion-title overflow-auto">
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