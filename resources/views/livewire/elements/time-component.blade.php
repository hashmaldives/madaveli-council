<div wire:poll.1s>
    @if($language == 'dh')
        @php \Carbon\Carbon::setLocale('dv'); @endphp
    @else 
        @php \Carbon\Carbon::setLocale('en'); @endphp
    @endif
    <span class="lang-{{ $language }} visible"><p class="mb-0">{{ Carbon\Carbon::now()->translatedFormat('d M Y - H:i:s') }}</p></span>
</div>