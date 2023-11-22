<li class="nav-item language-switch-container menu-item">
    <span dir="ltr" class="language-switch d-flex align-items-center justify-content-center">
        @if (nova_get_setting('default_language') == 'en') <span class="lang-label en">EN</span> @else <span class="lang-label dh">DH</span> @endif
        &nbsp;&nbsp;
        <input id="{{ $switchId }}" wire:model="language" value="true" class="hash-cms-toggle language-toggle form-control" name="{{ $switchId }}" type="checkbox"><label for="{{ $switchId }}"></label>
        {{-- <input id="{{ $switchId }}" wire:model="language" value="true" class="form-control" name="{{ $switchId }}" type="checkbox"><label for="{{ $switchId }}"></label> --}}
        &nbsp;&nbsp;
        @if (nova_get_setting('default_language') == 'en') <span class="lang-label dh">DH</span> @else <span class="lang-label en">EN</span> @endif
    </span>
</li>