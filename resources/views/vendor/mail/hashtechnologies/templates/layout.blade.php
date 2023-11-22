<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>
<td class="content-cell">
    
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<div style="display: flex; align-items: center;" class="mail-header">
    <img style="width: 180px; height: auto; margin-right: 15px;" class="logo" src="{{ getMedia(nova_get_setting('email_header_logo'), null) }}">
</div>
@endcomponent
@endslot

{{-- Body --}}
# Greetings from {{ nova_get_setting('email_site_name') }}

Dear {{ $submission['name'] }},

We have received your {{ $resourceData['resourceName'] }}. Our team will review the request and get in touch.

Submission Summary

@switch($resourceData['resourceUrl'])
    @case('student-support-tickets')
        Name: {{ $submission['name'] }}
        Email: {{ $submission['email'] }}
        Phone: {{ $submission['phone'] }}
        <p>Issue / Concern: {{ $submission['user_concern'] }}</p>
    @break
 
    @default
    
@endswitch


Thanks,<br>
{{ nova_get_setting('email_site_name') }}

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

{{ $subcopy ?? '' }}
</td>
</tr>
</table>
</td>
</tr>

{{ $footer ?? '' }}
</table>
</td>
</tr>
</table>
</body>
</html>
