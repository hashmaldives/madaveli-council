<div class="form-group col-md-{{ $col }}">
    <label for={{ $name }}><span class="lang-{{ $language }} visible">{{ $language == 'dh' ? $labelDh : $labelEn }}<span class="asterisk">{{ $req == 'true' ? '*' : '' }}</span></span></label>
    <div class="{{ $class }}">
        <select id={{ $name }} wire:model={{ $name }} name={{ $name }} class="@if($language == 'dh' && $dualLanguage == true) text-dhivehi @endif" {{ $req == 'true' ? 'required' : '' }}>
            @foreach( json_decode($options, true) as $option )
                <option value="{{ $language == 'dh' ? $option['valueDh'] : $option['valueEn'] }}" {{!empty($option['disabled']) ? $option['disabled'] : ''}}>
                    {{ $language == 'dh' ? $option['nameDh'] : $option['nameEn'] }}
                </option>
            @endforeach
        </select>
        <div class="select__arrow"></div>
    </div>
    <span class="errors with-errors color-danger">@error($name){{ $message }}@enderror</span>
</div>