<div id="accordion" class="accordion {{ $language == 'dh' ? 'rtl' : 'ltr' }}">
    <ul id="menu-primary-menu" class="offcanvas-nav nav flex-column accordion d-flex align-items-stretch">
            <livewire:language-toggle switchId="language-switch-1" />
            {{-- @if ( !empty($topmenu) )
                @foreach ($topmenu['menuItems'] as $item)
                    @if ( $item['children']->count() )
                            <li class="menu-item nav-item accordion has-children">
                                <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse{{ $item['id'] }}" aria-expanded="false" aria-controls="collapse{{ $item['id'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                                <ul class="submenu flex-column text-light collapse" id="collapse{{ $item['id'] }}" aria-labelledby="headingTwo" data-parent="#accordion">

                                    @foreach ($item['children'] as $sub_item)
                                    <li class="nav-item menu-item"><a href="{{ $sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                    @endforeach
                                </ul>
                            </li>
                    @elseif ( $item['type'] == 'page' )
                        <li class="menu-item nav-item {{ ( $item['value'] == Request::url())?' active':'' }}">
                            <a href="{{ env('APP_URL'). '/' .$item['value'] }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                        </li>
                    @elseif ( $item['type'] == 'publicationcategory' )
                        <li class="menu-item nav-item {{ ( $item['value'] == Request::url())?' active':'' }}">
                            <a href="{{ env('APP_URL'). '/' .$item['value'] }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                        </li>
                    @elseif ( $item['type'] == 'archive' )
                        <li class="menu-item nav-item {{ ( $item['value'] == Request::url())?' active':'' }}">
                            <a href="{{ env('APP_URL'). '/' .$item['value'] }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                        </li>
                    @elseif ( $item['type'] !== 'inline_divider' )
                        @php 
                            if(!empty($item['data']['external_link'])) :
                                $external_link_status = $item['data']['external_link'];
                            else : 
                                $external_link_status = 0;
                            endif
                        @endphp
                        @if($external_link_status == 1)
                            <li class="menu-item nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a class="nav-link" href="{{ $item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                        @else
                            <li class="menu-item nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a class="nav-link" href="{{ env('APP_URL'). '/' .$item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                        @endif
                    @endif
                @endforeach
            @endif --}}
        @if ( !empty($menu) )
            @foreach ($menu['menuItems'] as $item)
                @if (count($item['children']) )
                    <li class="menu-item nav-item accordion has-children">
                        <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse{{ $item['id'] }}" aria-expanded="false" aria-controls="collapse{{ $item['id'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                        <ul class="submenu flex-column text-light collapse" id="collapse{{ $item['id'] }}" aria-labelledby="headingTwo" data-parent="#accordion">
                            @foreach ($item['children'] as $sub_item)
                                {{-- @php var_dump($sub_item) @endphp --}}
                                @switch($sub_item['type'])
                                    {{-- @case('column_divider')
                                        </li><!-- / megamenu-column --></ul><!-- / dropdown-menu --><li class="megamenu-column"><ul>
                                    @break --}}
                                    @case('inline_divider')
                                        <li class="divider"></li>
                                    @break
                                    @case('section_heading')
                                        <li class="section-heading">
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span>
                                        </li>
                                    @break
                                    @case('description_item')
                                        <li class="nav-item">
                                            <span class="sub">
                                                <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['description_dh'] : $sub_item['data']['description_en'] }}</span>
                                            </span>
                                        </li>
                                    @break
                                    @case('image_item')
                                        @php 
                                            if(!empty($sub_item['data']['external_link'])) :
                                                $external_link_status = $sub_item['data']['external_link'];
                                            else : 
                                                $external_link_status = 0;
                                            endif;
                                            if($external_link_status == 1) :
                                                $url = $sub_item['data']['url'];
                                            else : 
                                                $url = env('APP_URL'). '/' .$sub_item['data']['url'];
                                            endif;
                                        @endphp
                                        <li class="menu-item nav-item featured-image">
                                            <a class="nav-link" href="{{ $url }}">
                                            <div class="thumbnail">
                                                <img src="{{ getMedia($sub_item['data']['image'], 'medium-thumbnail') }}" alt="">
                                            </div>
                                            <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span>
                                            @if ( !empty( $sub_item['data']['description_en'] ) && !empty( $sub_item['data']['description_dh'] ) )
                                            <span class="sub">
                                                <span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['description_dh'] : $sub_item['data']['description_en'] }}</span>
                                            </span>
                                            @endif
                                            </a>
                                        </li> <!-- / nav-item -->
                                    @break
                                    @case('page')
                                        @php $itemUrl = env('APP_URL'). '/' .$sub_item['value']; @endphp
                                        <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a class="nav-link" href="{{ $itemUrl }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                    @break
                                    @case('publicationcategory')
                                        @php $itemUrl = env('APP_URL'). '/' .$sub_item['value']; @endphp
                                        <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a class="nav-link" href="{{ $itemUrl }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                    @break
                                    @case('archive')
                                        @php $itemUrl = env('APP_URL'). '/' .$sub_item['value']; @endphp
                                        <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a class="nav-link" href="{{ $itemUrl }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                    @break
                                    @case('multilangitem')
                                        @php 
                                            if(!empty($sub_item['data']['external_link'])) :
                                                $external_link_status = $sub_item['data']['external_link'];
                                            else : 
                                                $external_link_status = 0;
                                            endif
                                        @endphp
                                        @if($external_link_status == 1)
                                            <li class="menu-item nav-item"><a class="nav-link" href="{{ $sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                        @else
                                            <li class="menu-item nav-item"><a class="nav-link" href="{{ env('APP_URL'). '/' .$sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                        @endif
                                    @break
                                    @case('regularitem')
                                        @php 
                                            if(!empty($sub_item['data']['external_link'])) :
                                                $external_link_status = $sub_item['data']['external_link'];
                                            else : 
                                                $external_link_status = 0;
                                            endif
                                        @endphp
                                        @if($external_link_status == 1)
                                            <li class="menu-item nav-item"><a class="nav-link" href="{{ $sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                        @else
                                            <li class="menu-item nav-item"><a class="nav-link" href="{{ env('APP_URL'). '/' .$sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                                        @endif
                                    @break
                                @endswitch
                            @endforeach
                        </ul>
                    </li>
                @elseif ( $item['type'] == 'page' )
                    @php $itemUrl = env('APP_URL'). '/' .$item['value']; @endphp
                    <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                        <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                    </li>
                @elseif ( $item['type'] == 'publicationcategory' )
                    @php $itemUrl = env('APP_URL'). '/' .$item['value']; @endphp
                    <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                        <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                    </li>
                @elseif ( $item['type'] == 'archive' )
                    @php $itemUrl = env('APP_URL'). '/' .$item['value']; @endphp
                    <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                        <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
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
                        <li class="menu-item nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $item['data']['url'] }}"><i class="fa {{ $item['data']['icon'] }}"></i></a></li>
                    @else
                        <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $itemUrl }}"><i class="fa {{ $item['data']['icon'] }}"></i></a></li>
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
                        <li class="nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="d-flex nav-link btn btn-menu {{ $item['data']['design'] }}" href="{{ $item['data']['url'] }}"><i class="fa {{ $item['data']['icon'] }}"></i><span class="lang-{{$language}} visible pl-2 pr-2">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                    @else
                        <li class="nav-item {{ ( $itemUrl == Request::url())?' active':'' }}"><a {{ $target }} class="d-flex nav-link btn btn-menu {{ $item['data']['design'] }}" href="{{ $itemUrl }}"><i class="fa {{ $item['data']['icon'] }}"></i><span class="lang-{{$language}} visible pl-2 pr-2">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                    @endif
                @elseif ( $item['type'] !== 'inline_divider')
                    @php 
                    if( !empty($item['data']['target']) && $item['data']['target'] == 1 ) :
                        $target = 'target=_blank';
                    else : 
                        $target = 'target=_self';
                    endif;
                    $itemUrl = env('APP_URL'). '/' .$item['data']['url'];
                    @endphp
                    @if(!empty($item['data']['external_link']) && $item['data']['external_link'] == 1 && $item['type'] !== 'iconitem')
                        <li class="menu-item nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}">
                            <a href="{{ $item['data']['url'] }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span> </a>
                        </li>
                    @else
                        @php $itemUrl = env('APP_URL'). '/' .$item['data']['url']; @endphp
                        <li class="menu-item nav-item {{ ( $itemUrl == Request::url())?' active':'' }}">
                            <a href="{{ $itemUrl }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                        </li>
                    @endif
                @endif
            @endforeach
            {{-- @endif --}}
        @endif
    </ul>
</div> <!-- / accordion -->