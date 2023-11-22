<div class="form-group col-md-{{ $col }}">
    <label {{ $name }} class="control control--checkbox lang-{{ $language }} visible">
        <div class="pl-4 pr-4 ml-1 mr-1">
            <span>{{ $language == 'dh' ? $labelDh : $labelEn }}</span>
        </div>
        <input type="checkbox" wire:model={{ $name }} id={{ $name }} value="true" class="{{ $class }}"/>
        <div class="control__indicator"></div>
    </label>
    <span class="errors with-errors color-danger">@error($name){{ $message }}@enderror</span>
</div>