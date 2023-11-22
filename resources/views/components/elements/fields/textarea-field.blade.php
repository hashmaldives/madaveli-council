<div class="form-group col-md-{{ $col }}">
    <label for={{ $name }}><span class="lang-{{ $language == 'dh' ? 'dh' : 'en' }} visible">{{ $language == 'dh' ? $labelDh : $labelEn }}<span class="asterisk">{{ $req == 'true' ? '*' : '' }}</span></span></label>
    <textarea class="{{ $class }} @if($language == 'dh' && $dualLanguage == 'true') text-dhivehi @endif" wire:model="{{ $name }}" id={{ $name }} {{ $req == 'true' ? 'required' : '' }} rows={{ $rows }}></textarea>
    <span class="errors with-errors color-danger">@error($name){{ $message }}@enderror</span>
</div>