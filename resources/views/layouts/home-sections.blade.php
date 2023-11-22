
    @if( !empty($item->container) && $item->container  == 1 )
        @php $container = '1'; @endphp
    @else
        @php $container = ''; @endphp
    @endif

    @php 
        if(!empty($item->padding_top)) :
            $paddingTop = 'padding-top:' . $item->padding_top . 'px; ';
        else :
            $paddingTop = '';
        endif;
        if(!empty($item->padding_bottom)) :
            $paddingBottom = 'padding-bottom:' . $item->padding_bottom . 'px; ';
        else :
            $paddingBottom = '';
        endif;
        if(!empty($item->section_height)) {
            $height = 'height:' . $item->section_height . 'px; ';
        }
        else {
            $height = '';
        }
    @endphp
    
    @if ( @$item->parallax  == 1 && !empty( $item->background_image ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }} {{ $height }}" data-height="{{ $item->section_height }}px" class="page-section home-page-section set-height with-background position-relative parallax d-flex align-items-center justify-content-center {{ $item->text_color  }}" data-image-src="{{ getMedia($item->background_image, null) }}">
    @elseif ( @$item->parallax  == 1 && !empty( $item->background_image  ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }}  {{ $height }}" class="page-section home-page-section with-background position-relative parallax {{ $item->text_color  }}" data-image-src="{{ getMedia($item->background_image, null) }}">
    @elseif ( @$item->parallax  !== 1 && !empty( $item->background_image  ) )
        <div class="page-section home-page-section with-background {{ $item->text_color  }}" style="background-image: url({{ getMedia($item->background_image, null) }}); background-attachment: fixed; background-size: cover; {{ $paddingTop }}{{ $paddingBottom }}  {{ $height }}">
    @elseif ( !empty( $item->background_color  ) && empty( $item->background_image  ) )
        <div style="{{ $paddingTop }}{{ $paddingBottom }} background-color: {{ $item->background_color  }};  {{ $height }}" class="page-section {{ $item->text_color  }}">
    @else
        <div style="{{ $paddingTop }}{{ $paddingBottom }}  {{ $height }}" class="page-section home-page-section {{ $item->text_color  }}">
    @endif

    @if (@$item->bg_filter  == 1)
        @php
        $filter_bg_hex = $item->filter_bg ;
        $filter_opacity = $item->filter_visibility ;
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

    @php 
        $enElements = json_decode($item->section_elements_en);
        $dhElements = json_decode($item->section_elements_dh);
    @endphp

        @if ( $container == 1 )
            <div class="container">
        @endif

        <div class="lang-{{ $language }} visible">
            <div class="row">
                @if($language == 'dh')
                    @foreach ($dhElements  as $item)
                        @include('layouts/resource-blocks')
                    @endforeach
                @else
                    @foreach ($enElements  as $item)
                        @include('layouts/resource-blocks')
                    @endforeach
                @endif
            </div><!--row-->
        </div>
        
        @if ( $container == 1 )
            </div><!--container-->
        @endif

    </div><!-- / dynamic-page-section -->