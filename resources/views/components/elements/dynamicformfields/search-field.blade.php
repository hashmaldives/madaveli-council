<input type="{{ $type }}" class="{{ $class }} @if($language == 'dh' && $dualLanguage == 'true') text-dhivehi @endif" wire:model={{ $name }} id={{ $name }} placeholder="{{ $language == 'dh' ? $placeHolderDh : $placeHolderEn }}">