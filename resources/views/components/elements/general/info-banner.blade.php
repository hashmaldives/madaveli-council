<div class="form-group rich-text col-md-{{ $col }}">

    <div class="mt-2 info-box {{ $design }} alert alert-{{ $design }}" role="alert">
        @if(!empty($icon))
        <div class="icon-container">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
        <div class="text-container lang-{{ $language == 'dh' ? 'dh' : 'en' }} visible">
            <span>
                @if($dualLanguage == 'true')
                    {!! $language == 'dh' ? $contentDh : $contentEn !!}
                @else 
                    {!! $contentEn !!}
                @endif
            </span>
        </div>
    </div>

</div>