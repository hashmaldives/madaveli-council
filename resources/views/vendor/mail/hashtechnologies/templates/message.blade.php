@extend('mail.hashtechnologies.templates.layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<div style="display: flex; align-items: center;" class="mail-header">
    <img style="width: 180px; height: auto; margin-right: 15px;" class="logo" src="{{ getMedia(nova_get_setting('email_header_logo'), null) }}">
</div>
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ nova_get_setting('email_site_name') ?? config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endextend
