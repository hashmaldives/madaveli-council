<div class="col-lg-{{ $item->attributes->column }}">
    @switch($item->layout)
        @case('richtext')
            <div style="max-width: 700px;" class="block-container mb-3">{!! $item->attributes->content !!} </div>
        @break
        @case('spacerlayout')
            <div style="height: {{$item->attributes->height}}px;" class="block-container spacer-block"></div>
        @break
        @case('buttonlayout')
            <div class="block-container mb-2 {{ $item->attributes->align }} d-flex">
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
                    <a {{ $target }} class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" {{ $target }} href="{{ $item->attributes->url }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i> @endif&nbsp;{{ $item->attributes->title }}</a>
                @else
                    <a {{ $target }} class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" {{ $target }} href="{{ env('APP_URL'). '/' .$item->attributes->url }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i> @endif&nbsp;{{ $item->attributes->title }}</a>
                @endif
            </div>
        @break
        @case('attachmentbuttonlayout')
            <div class="block-container mb-2">
                <a class="btn btn-{{ $item->attributes->size }} {{ $item->attributes->design }}" target="_blank" href="{{ getMedia($item->attributes->attachment, null) }}">@if(!empty($item->attributes->icon)) <i class="{{$item->attributes->icon}}"></i> @endif&nbsp;{{ $item->attributes->title }}</a>
            </div>
        @break
    @endswitch
</div>