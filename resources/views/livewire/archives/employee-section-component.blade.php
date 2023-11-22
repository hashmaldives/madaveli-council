@if($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else 
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
<div class="container member-component">
    <div class="row">
        <div class="col-lg-12 col-12">
          <ul class="nav nav-tabs" id="nav-tab" role="tablist">
              @foreach($data as $key=>$parentItem)
                @if($parentItem->active == 1)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="t{{$key}}-tab" data-toggle="tab" data-target="#t{{$key}}" type="button" role="tab" aria-controls="t{{$key}}" aria-selected="true">
                        <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? $parentItem->title_dh : $parentItem->title_en }}</span>
                    </button>
                </li>
                @endif
              @endforeach
          </ul>
        </div>
        <div class="col-lg-12 col-12">
          <div class="tab-content pt-4" id="nav-tabContent">
            @foreach($data as $key=>$parentItem)
                @if($parentItem->active == 1)
                @php 
                    $loop = $parentItem; 
                    $loop2 = $parentItem;
                    $loop3 = $parentItem; 
                @endphp
                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="t{{$key}}" role="tabpanel" aria-labelledby="t{{$key}}-tab">
                    <div class="term-details">
                        <div class="lang-{{ $language }} visible">
                            <h5 class="term-title">{{ $language == 'dh' ?  $parentItem->title_dh . 'ގައި މަސައްކަތް ކުރައްވާ މުވައްޒިފުންް' : 'Employees working at ' . $parentItem->title_en }}</h5>
                        </div>
                    </div>
                    <div class="members-container text-center">
                        @foreach($loop->employees as $item )
                            @if($item->pivot->level == 1)
                            <!--  MEMBER ITEM START  -->
                            <div class="member-item level{{$item->pivot->level}}" wire:key="search-{{ $item->id }}">
                                @if($parentItem->link_to_employee_profile == 1) <a href="{{ route('single-employee', $item->slug ) }}"> @endif
                                    <div class="profile-picture-container d-flex justify-content-center">
                                        <div class="profile-picture zoh">
                                            @php 
                                                if (!empty($item->image)) : 
                                                    $image = getMedia($item->image, null);
                                                else :
                                                    $image = getMedia(nova_get_setting('fallback_element_image'), null);
                                                endif;
                                            @endphp
                                            <img src="{{ $image }}">
                                        </div>
                                    </div>
                                    <!--thumbnail-->
                                    <div class="text">
                                        <div class="name">
                                            <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->name_dh : $item->name_en }}</h6></div>
                                        </div><!--title-->
                                        @if(!empty( $item->pivot->position_dh && $item->pivot->position_en ))
                                        <div class="position">
                                            <div class="lang-{{ $language }} visible"><p>{{ $language == 'dh' ? $item->pivot->position_dh : $item->pivot->position_en }}</p></div>
                                        </div>
                                        @endif
                                        @if(!empty( $item->short_description_en && $item->short_description_dh ))
                                        <div class="bio">
                                            <div class="lang-{{ $language }} visible">{!! $language == 'dh' ? $item->short_description_dh : $item->short_description_en !!}</div>
                                        </div><!--title-->
                                        @endif
                                    </div>
                                @if($parentItem->link_to_employee_profile == 1) </a> @endif
                            </div>
                            <!--  MEMBER ITEM END  -->
                            
                            @endif
                            
                        @endforeach
                    </div><!--members-container-->
                    
                    <div class="members-container text-center">
                        @foreach($loop2->employees as $item )
                            @if($item->pivot->level == 2)
                            
                            <!--  MEMBER ITEM START  -->
                            <div class="member-item level{{$item->pivot->level}}" wire:key="search-{{ $item->id }}">
                                @if($parentItem->link_to_employee_profile == 1) <a href="{{ route('single-employee', $item->slug ) }}"> @endif
                                    <div class="profile-picture-container d-flex justify-content-center">
                                        <div class="profile-picture zoh">
                                            @php 
                                                if (!empty($item->image)) : 
                                                    $image = getMedia($item->image, null);
                                                else :
                                                    $image = getMedia(nova_get_setting('fallback_element_image'), null);
                                                endif;
                                            @endphp
                                            <img src="{{ $image }}">
                                        </div>
                                    </div>
                                    <!--thumbnail-->
                                    <div class="text">
                                        <div class="name">
                                            <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->name_dh : $item->name_en }}</h6></div>
                                        </div><!--title-->
                                        @if(!empty( $item->pivot->position_dh && $item->pivot->position_en ))
                                        <div class="position">
                                            <div class="lang-{{ $language }} visible"><p>{{ $language == 'dh' ? $item->pivot->position_dh : $item->pivot->position_en }}</p></div>
                                        </div>
                                        @endif
                                        @if(!empty( $item->short_description_en && $item->short_description_dh ))
                                        <div class="bio">
                                            <div class="lang-{{ $language }} visible">{!! $language == 'dh' ? $item->short_description_dh : $item->short_description_en !!}</div>
                                        </div><!--title-->
                                        @endif
                                    </div>
                                @if($parentItem->link_to_employee_profile == 1) </a> @endif
                            </div>
                            <!--  MEMBER ITEM END  -->
                            
                            @endif
                            
                        @endforeach
                    </div><!--members-container-->

                    <div class="members-container text-center">
                        @foreach($loop3->employees as $item )
                            @if($item->pivot->level == 3)
                            
                            <!--  MEMBER ITEM START  -->
                            <div class="member-item level{{$item->pivot->level}}" wire:key="search-{{ $item->id }}">
                                @if($parentItem->link_to_employee_profile == 1) <a href="{{ route('single-employee', $item->slug ) }}"> @endif
                                    <div class="profile-picture-container d-flex justify-content-center">
                                        <div class="profile-picture zoh">
                                            @php 
                                                if (!empty($item->image)) : 
                                                    $image = getMedia($item->image, null);
                                                else :
                                                    $image = getMedia(nova_get_setting('fallback_element_image'), null);
                                                endif;
                                            @endphp
                                            <img src="{{ $image }}">
                                        </div>
                                    </div>
                                    <!--thumbnail-->
                                    <div class="text">
                                        <div class="name">
                                            <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->name_dh : $item->name_en }}</h6></div>
                                        </div><!--title-->
                                        @if(!empty( $item->pivot->position_dh && $item->pivot->position_en ))
                                        <div class="position">
                                            <div class="lang-{{ $language }} visible"><p>{{ $language == 'dh' ? $item->pivot->position_dh : $item->pivot->position_en }}</p></div>
                                        </div>
                                        @endif
                                        @if(!empty( $item->short_description_en && $item->short_description_dh ))
                                        <div class="bio">
                                            <div class="lang-{{ $language }} visible">{!! $language == 'dh' ? $item->short_description_dh : $item->short_description_en !!}</div>
                                        </div><!--title-->
                                        @endif
                                    </div>
                                @if($parentItem->link_to_employee_profile == 1) </a> @endif
                            </div>
                            <!--  MEMBER ITEM END  -->
                            
                            @endif
                            
                        @endforeach
                    </div><!--members-container-->
                   

                </div>
                @endif
            @endforeach
          </div>
        </div>
    </div>
</div><!--container-->