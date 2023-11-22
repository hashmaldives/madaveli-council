<div>
    <div class="form-processing {{ $class }}" wire:loading wire:target="{{ $target }}">
        @if($dualLanguage == true)
            <h6><i class="{{ $icon }} fa-spin"></i><span>{{ $language == 'dh' ? $labelDh : $labelEn }}</span></h6> 
        @else 
            <h6><i class="{{ $icon }} fa-spin"></i><span>{{ $labelEn }}</span></h6> 
        @endif
    </div>
</div>