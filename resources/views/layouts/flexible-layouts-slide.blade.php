

{{-- @include('layouts/page-blocks') --}}

<div class="@if(!empty($item->attributes->column)) {{'col-lg-'.$item->attributes->column}} @endif">
    @switch($item->layout)

        @case('slidesectionlayout')
                
            @foreach ($item->attributes->section_elements as $item)
                
                    @include('layouts/slide-blocks')
                
            @endforeach

        @break

    @endswitch
</div>
