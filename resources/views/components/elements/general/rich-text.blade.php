<div class="form-group rich-text col-md-{{ $col }}">
    @if( !empty( $labelDh && $labelEn ) )
    <label for={{ $name }}><span class="lang-{{ $language }} visible">{{ $language == 'dh' ? $labelDh : $labelEn }}</span></label>
    @endif
    <div class="content {{ $class }} @if($language == 'dh' && $dualLanguage == 'true') lang-dh @endif">
        {!! $language == 'dh' ? $contentDh : $contentEn !!}
    </div>
</div>