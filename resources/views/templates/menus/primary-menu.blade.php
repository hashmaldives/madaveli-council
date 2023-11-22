<ul  dir="{{ $language == 'dh' ? 'rtl' : 'ltr' }}" class="nav navbar navbar-right nav-dark nav-desktop d-flex align-items-center {{ $language == 'dh' ? 'dh' : 'en' }}">
    @if ( !empty($menu) )
        @foreach ($menu['menuItems'] as $item)
            
            @if ( count($item['children']) )
                {{-- @if ( $item['type'] !== 'inline_divider' ) --}}
                    @php $megamenu_status = '' @endphp
                    @if ( $item['data']['activate_megamenu'] == 1 )
                        @php $megamenu_status = 'megamenu'; @endphp
                    @endif
                    
                    <li class="nav-item dropdown {{$megamenu_status}} {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                        <ul class="dropdown-menu">
                            @php $column_divider_starting = '<li class="megamenu-column"><ul>'; @endphp
                            @php $column_divider_closing = '</li><!-- / megamenu-column --></ul><!-- / dropdown-menu -->'; @endphp

                            @if ( $item['data']['activate_megamenu'] == 1 )
                                @php echo $column_divider_starting; @endphp
                            @endif

                            @foreach ($item['children'] as $item_lvl_2)
                                @php $column_divider_in_place = ''; @endphp
                                
                                @switch($item_lvl_2['type'])
                                    @case('column_divider')
                                        </li><!-- / megamenu-column --></ul><!-- / dropdown-menu --><li class="megamenu-column"><ul>
                                    @break
                                    @case('inline_divider')
                                        <li class="divider"></li>
                                    @break
                                    @case('section_heading')
                                        <li class="section-heading  ">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span>
                                        </li>
                                    @break
                                    @case('description_item')
                                        <li class="description-item nav-item  ">
                                            <span class="sub">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['description_dh'] : $item_lvl_2['data']['description_en'] }}</span>
                                            </span>
                                        </li>
                                    @break
                                    @case('image_item')
                                        <li class="nav-item featured-image {{ ( $item_lvl_2['value'] == Request::url())?' active':'' }}  ">
                                            @php 
                                                if(!empty($item_lvl_2['data']['external_link']) && $item_lvl_2['data']['external_link'] == 1) :
                                                    $url = $item_lvl_2['data']['url'];
                                                else : 
                                                    $url = env('APP_URL'). '/' .$item_lvl_2['data']['url'];
                                                endif;
                                                if( !empty($item_lvl_2['data']['target']) && $item_lvl_2['data']['target'] == 1 ) :
                                                    $target = 'target=_blank';
                                                else : 
                                                    $target = 'target=_self';
                                                endif;
                                            @endphp
                                            <a {{ $target }} class="nav-link {{ ( $url == Request::url())?' active':'' }}" href="{{ $url }}">
                                                <div class="thumbnail">
                                                    <img src="{{ getMedia($item_lvl_2['data']['image'], 'medium-thumbnail') }}">
                                                </div>
                                                <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span>
                                                @if ( !empty( $item_lvl_2['data']['description_en'] ) && !empty( $item_lvl_2['data']['description_dh'] ) )
                                                <span class="sub">
                                                    <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['description_dh'] : $item_lvl_2['data']['description_en'] }}</span>
                                                </span>
                                                @endif
                                            </a>
                                        </li> <!-- / nav-item -->
                                    @break
                                    @case('page')
                                        @php $itemUrl = env('APP_URL'). '/' .$item_lvl_2['value']; @endphp
                                        <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}  ">
                                            <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a>
                                        </li>
                                    @break
                                    @case('publicationcategory')
                                        @php $itemUrl = env('APP_URL'). '/publications/' .$item_lvl_2['value']; @endphp
                                        <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}  ">
                                            <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a>
                                        </li>
                                    @break
                                    @case('archive')
                                        @php $itemUrl = env('APP_URL'). '/' .$item_lvl_2['value']; @endphp
                                        <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}  ">
                                            <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a>
                                        </li>
                                    @break
                                    @case('icon_item')
                                        @php 
                                            if( !empty($item_lvl_2['data']['target']) && $item_lvl_2['data']['target'] == 1 ) :
                                                $target = 'target=_blank';
                                            else : 
                                                $target = 'target=_self';
                                            endif;
                                            $itemUrl = env('APP_URL'). '/' .$item_lvl_2['data']['url'];
                                        @endphp
                                        @if(!empty($item_lvl_2['data']['external_link']) && $item_lvl_2['data']['external_link'] == 1)
                                            <li class="nav-item {{ ( $item_lvl_2['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $item_lvl_2['data']['url'] }}"><i class="fa {{ $item_lvl_2['data']['icon'] }} fa-lg"></i></a></li>
                                        @else
                                            <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $itemUrl }}"><i class="fa {{ $item_lvl_2['data']['icon'] }} fa-lg"></i></a></li>
                                        @endif
                                    @break
                                    @default
                                    @case('regularitem')
                                    @php 
                                        if( !empty($item_lvl_2['data']['target']) && $item_lvl_2['data']['target'] == 1 ) :
                                            $target = 'target=_blank';
                                        else : 
                                            $target = 'target=_self';
                                        endif;
                                        $itemUrl = env('APP_URL'). '/' .$item_lvl_2['data']['url'];
                                    @endphp
                                        @if( !empty($item_lvl_2['data']['external_link']) && $item_lvl_2['data']['external_link'] == 1 && count($item_lvl_2['children']) <= 0 )
                                            <li class="nav-item {{ ( $item_lvl_2['data']['url'] == Request::url())?' active':'' }}  "><a {{ $target }} class="nav-link" href="{{ $item_lvl_2['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a></li>
                                        @elseif( empty($item_lvl_2['data']['external_link']) && $item_lvl_2['data']['external_link'] !== 1 && count($item_lvl_2['children']) <= 0 )
                                            <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}  "><a {{ $target }} class="nav-link" href="{{ $itemUrl }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a></li>
                                        @elseif( count($item_lvl_2['children']) >= 1 )
                                            <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}   {{ count($item['children']) ? 'dropdown' : '' }}">
                                                <a href="#" class="dropdown-toggle nav-link {{ $language == 'dh' ? 'rtl' : 'ltr' }}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_2['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a>
                                                <ul class="dropdown-menu dropdown-submenu depth_2 {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
                                                    @foreach ($item_lvl_2['children'] as $item_lvl_3)
                                                        @switch($item_lvl_3['type'])
                                                        @case('regularitem')
                                                            @php 
                                                                if( !empty($item_lvl_3['data']['target']) && $item_lvl_3['data']['target'] == 1 ) :
                                                                    $target = 'target=_blank';
                                                                else : 
                                                                    $target = 'target=_self';
                                                                endif;
                                                                $itemLvl3Url = env('APP_URL'). '/' .$item_lvl_3['data']['url'];
                                                            @endphp
                                                            @if( !empty($item_lvl_3['data']['external_link']) && $item_lvl_3['data']['external_link'] == 1 && count($item_lvl_3['children']) <= 0 )
                                                                <li class="nav-item {{ ( $item_lvl_3['data']['url'] == Request::url())?' active':'' }}  "><a {{ $target }} class="nav-link" href="{{ $item_lvl_3['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_3['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a></li>
                                                            @elseif( empty($item_lvl_3['data']['external_link']) && $item_lvl_3['data']['external_link'] !== 1 && count($item_lvl_3['children']) <= 0 )
                                                                <li class="nav-item {{ ( $itemLvl3Url == Request::url())?' active':'' }}  "><a {{ $target }} class="nav-link" href="{{ $itemLvl3Url }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item_lvl_3['data']['label_dh'] : $item_lvl_2['data']['label_en'] }}</span></a></li>
                                                            @endif
                                                        @break
                                                        @endswitch
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @break
                                        
                                @endswitch
                            @endforeach
                            @if ( $item['data']['activate_megamenu'] == 1 )
                                @php echo $column_divider_closing; @endphp
                            @endif
                        </ul>
                    </li>

            @elseif ( $item['type'] == 'inline_divider' )

            @elseif ( $item['type'] == 'page' )

            @php $itemUrl = env('APP_URL'). '/' .$item['value']; @endphp

                <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                    <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                </li>
            
            @elseif ( $item['type'] == 'publicationcategory' )

            @php $itemUrl = env('APP_URL'). '/publications/' .$item['value']; @endphp

                <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                    <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                </li>

            @elseif ( $item['type'] == 'archive' )

            @php $itemUrl = env('APP_URL'). '/' .$item['value']; @endphp

                <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                    <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                </li>

            @elseif ( $item['type'] == 'icon_item' )
                @php 
                    if( !empty($item['data']['target']) && $item['data']['target'] == 1 ) :
                        $target = 'target=_blank';
                    else : 
                        $target = 'target=_self';
                    endif;
                    $itemUrl = env('APP_URL'). '/' .$item['data']['url'];
                @endphp
                @if(!empty($item['data']['external_link']) && $item['data']['external_link'] == 1)
                    <li class="nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $item['data']['url'] }}"><i class="fa {{ $item['data']['icon'] }} fa-lg"></i></a></li>
                @else
                    <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $itemUrl }}"><i class="fa {{ $item['data']['icon'] }} fa-lg"></i></a></li>
                @endif
            @elseif ( $item['type'] == 'button_item' )
                @php 
                    if( !empty($item['data']['target']) && $item['data']['target'] == 1 ) :
                        $target = 'target=_blank';
                    else : 
                        $target = 'target=_self';
                    endif;
                    $itemUrl = env('APP_URL'). '/' .$item['data']['url'];
                @endphp

                @if(!empty($item['data']['external_link']) && $item['data']['external_link'] == 1)
                    <li class="nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="d-flex nav-link btn btn-menu {{ $item['data']['design'] }}" href="{{ $item['data']['url'] }}"><i class="fa {{ $item['data']['icon'] }}"></i><span class="lang-en pl-2 pr-2">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}/span></a></li>
                @else
                    <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a {{ $target }} class="d-flex nav-link btn btn-menu {{ $item['data']['design'] }}" href="{{ $itemUrl }}"><i class="fa {{ $item['data']['icon'] }}"></i><span class="lang-en pl-2 pr-2">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                @endif
            @else 

            @php 
                if( !empty($item['data']['target']) && $item['data']['target'] == 1 ) :
                    $target = 'target=_blank';
                else : 
                    $target = 'target=_self';
                endif;
                $itemUrl = env('APP_URL'). '/' .$item['data']['url'];
            @endphp
                @if(!empty($item['data']['external_link']) && $item['data']['external_link'] == 1)
                    <li class="nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                @else
                    <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $itemUrl }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                @endif
                
            @endif
            
            
        @endforeach
    @endif

    <li class="nav-item">
        <a class="nav-link megaSearchTrigger dropdown-toggle" role="button" ><i class="fas fa-search"></i></a>
    </li>

    <livewire:language-toggle switchId="language-switch" />

</ul>