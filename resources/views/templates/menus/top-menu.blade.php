<ul class="nav navbar top-nav navbar-light nav-desktop d-flex align-items-center justify-content-start">
    @if ( !empty($topMenu) )
        @foreach ($topMenu['menuItems'] as $item)
            @if ( $item['children']->count() )
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                    <ul class="dropdown-menu">
                        @foreach ($item['children'] as $sub_item)
                            @php 
                                if( !empty($sub_item['data']['target']) && $sub_item['data']['target'] == 1 ) :
                                    $target = 'target=_blank';
                                else : 
                                    $target = 'target=_self';
                                endif;
                            @endphp
                            @if(!empty($sub_item['data']['external_link']) && $sub_item['data']['external_link'] == 1)
                                <li class="nav-item"><a {{ $target }} class="nav-link" href="{{ $sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                            @else
                                <li class="nav-item"><a {{ $target }} class="nav-link" href="{{ env('APP_URL'). '/' .$sub_item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $sub_item['data']['label_dh'] : $sub_item['data']['label_en'] }}</span></a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @elseif ( $item['type'] == 'page' )
                <li class="nav-item {{ ( $item['value'] == Request::url())?' active':'' }}">
                    <a href="{{ env('APP_URL'). '/' .$item['value'] }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                </li>
            @elseif ( $item['type'] == 'archive' )
                <li class="nav-item {{ ( $item['value'] == Request::url())?' active':'' }}">
                    <a href="{{ env('APP_URL'). '/' .$item['value'] }}" class="nav-link"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a>
                </li>
            @else
                @php 
                    if( !empty($item['data']['target']) && $item['data']['target'] == 1 ) :
                        $target = 'target=_blank';
                    else : 
                        $target = 'target=_self';
                    endif;
                @endphp
                @if(!empty($item['data']['external_link']) && $item['data']['external_link'] == 1)
                    <li class="nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ $item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                @else
                    <li class="nav-item {{ ( $item['data']['url'] == Request::url())?' active':'' }}"><a {{ $target }} class="nav-link" href="{{ env('APP_URL'). '/' .$item['data']['url'] }}"><span class="lang-{{$language}} visible">{{ $language == 'dh' ? $item['data']['label_dh'] : $item['data']['label_en'] }}</span></a></li>
                @endif
            @endif
        @endforeach
    @endif
</ul>