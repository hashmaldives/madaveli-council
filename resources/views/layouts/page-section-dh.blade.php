

{{-- @include('layouts/page-blocks') --}}

    
@switch($item->layout)
    @case('pagesectionlayout')
        @if( !empty($item->attributes->container) )

            @if( $item->attributes->container == 1 )
                @php $container = '1'; @endphp
            @else
                @php $container = ''; @endphp
            @endif

        @endif
    
        @php 
        if(!empty($item->attributes->padding_top)) :
            $paddingTop = 'padding-top:' . $item->attributes->padding_top . 'px; ';
        else :
            $paddingTop = '';
        endif;
        if(!empty($item->attributes->padding_bottom)) :
            $paddingBottom = 'padding-bottom:' . $item->attributes->padding_bottom . 'px; ';
        else :
            $paddingBottom = '';
        endif;
        if(!empty($item->attributes->section_height)) {
            $height = 'height:' . $item->attributes->section_height . 'px; ';
        }
        else {
            $height = '';
        }
    @endphp

    @if ( @$item->attributes->parallax == 1 && !empty( $item->attributes->background_image && !empty( $item->attributes->section_height ) ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }}" data-height="{{$item->attributes->section_height}}px" class="dynamic-page-section set-height with-background position-relative parallax {{ $item->attributes->text_color }}" data-image-src="{{ getMedia($item->attributes->background_image, null) }}">
    @elseif ( @$item->attributes->parallax == 1 && !empty( $item->attributes->background_image ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }}" class="dynamic-page-section with-background position-relative parallax {{ $item->attributes->text_color }}" data-image-src="{{ getMedia($item->attributes->background_image, null) }}">
    @elseif ( @$page->data->content->parallax !== 1 && !empty( $item->attributes->background_image ) )
        <div class="dynamic-page-section with-background {{ $item->attributes->text_color }}" style="background-image: url({{ getMedia($item->attributes->background_image, null) }}); background-attachment: fixed; background-size: cover;">
    @elseif ( !empty( $item->attributes->background_color ) && empty( $item->attributes->background_image ) )
        <div style="background-color: {{ $item->attributes->background_color }}; {{ $paddingTop }}{{ $paddingBottom }} {{ $height }}" class="page-section {{ $item->attributes->text_color }}">
    @elseif ( @!empty( $item->attributes->section_height ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }} {{ $height }}" class="dynamic-page-section set-height {{ $item->attributes->text_color }}">
    @else
        <div style="{{ $paddingTop }}{{ $paddingBottom }} {{ $height }}" class="dynamic-page-section {{ $item->attributes->text_color }}">
    @endif

    @if (@$item->attributes->bg_filter == 1)
        @php
        $filter_bg_hex = $item->attributes->filter_bg;
        $filter_opacity = $item->attributes->filter_visibility;
        if ($filter_opacity == 10):
        $filter_opacity_value = '1';
        else:
        $filter_opacity_value = '0.' . $filter_opacity;
        endif;
        $hex = '#ff9900';
        [$r, $g, $b] = sscanf($filter_bg_hex, '#%02x%02x%02x');
        $filter_bg_rgba = 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $filter_opacity_value . ')';
        @endphp
        <div style="background-color: {{ $filter_bg_rgba }}" class="bg-filter"></div>
    @endif
        {{-- @if( !empty($item->attributes->container) ) --}}
            @if ( $container == 1 )
                <div class="container">
            @endif
        {{-- @endif --}}
        
            <div class="row">
                @foreach ($item->attributes->section_elements as $item)
                    
                        @include('layouts/resource-blocks-dh')
                    
                @endforeach
            </div><!--row-->
        
        {{-- @if( !empty($item->attributes->container) ) --}}
            @if ( $container == 1 )
                </div><!--container-->
            @endif
        {{-- @endif --}}
        

        </div>
    @break
@endswitch
