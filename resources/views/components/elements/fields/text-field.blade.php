<div class="form-group col-md-{{ $col }}">
    <label for={{ $name }}><span class="lang-{{ $language }} visible">{{ $language == 'dh' ? $labelDh : $labelEn }}<span class="asterisk">{{ $req == 'true' ? '*' : '' }}</span></span></label>
    <input type="{{ $type }}" class="{{ $class }} @if($language == 'dh' && $dualLanguage == 'true') text-dhivehi @endif" wire:model="{{ $name }}" id={{ $name }} {{ $req == 'true' ? 'required' : '' }}>
    <span class="errors with-errors color-danger">@error($name){{ $message }}@enderror</span>
</div>