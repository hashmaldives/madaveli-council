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

{{-- Header --}}
<tr>
    <td class="header">
    <a href="#" style="display: inline-block;">
        <div style="display: flex; align-items: center;" class="mail-header">
            <img style="width: 180px; height: 180px; margin-right: 15px;" class="logo" src="{{ getMedia(nova_get_setting('email_header_logo'), null) }}">
        </div>
    </a>
    </td>
</tr>

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>
<td class="content-cell">

{{-- Body --}}
<h4>Greetings from {{ nova_get_setting('email_site_name') }}</h4>

<p>Dear {{ $submission['name'] }},</p>

<p>We have received your {{ $resourceData['resourceName'] }}. Our team will review the request and get in touch.</p>

<div style="padding-left: 35px; margin-bottom: 25px;" class="submission-summary">
    @switch($resourceData['resourceUrl'])
        @case('idea-box-submissions')
            <p style="font-weight: 700; margin-bottom: 5px;">Submission Summary</p>
            <p style="margin: 0;">Application Reference: #00{{ $submission['id'] }}</p>
            <p style="margin: 0;">Name: {{ $submission['name'] }}</p>
            <p style="margin: 0;">Email / Phone: {{ $submission['email_phone'] }}</p>
            <p style="margin: 0;">Address: {{ $submission['address'] }}</p>
            <p style="margin: 0;">Idea / Concern: {{ $submission['user_message'] }}</p>
        @break
        @case('contact-form-submissions')
            <p style="font-weight: 700; margin-bottom: 5px;">Submission Summary</p>
            <p style="margin: 0;">Application Reference: #00{{ $submission['id'] }}</p>
            <p style="margin: 0;">Name: {{ $submission['name'] }}</p>
            <p style="margin: 0;">Email: {{ $submission['email_phone'] }}</p>
            <p style="margin: 0;">Message: {{ $submission['user_message'] }}</p>
        @break
        @case('application-form-submissions')
            <p style="font-weight: 700; margin-bottom: 5px;">Submission Summary</p>
            <p style="margin: 0;">Application Reference: #00{{ $submission['id'] }}</p>
            <p style="margin: 0;">Name: {{ $submission['name'] }}</p>
            <p style="margin: 0;">Phone: {{ $submission['phone'] }}</p>
            @if(!empty($submission['email']))<p style="margin: 0;">Email: {{ $submission['email'] }}</p>@endif
            <p style="margin: 0;">Permanent Address: {{ $submission['permanenet_address'] }}</p>
            <p style="margin: 0;">Present Address: {{ $submission['present_address'] }}</p>
            <p style="margin: 0;">Application Type: {{ $submission['application_type'] }}</p>
            <p style="margin: 0;">Message: {{ $submission['user_message'] }}</p>
        @break
        @case('job-applications')
            <p style="font-weight: 700; margin-bottom: 5px;">Your Application Reference Number is: #00{{ $submission['id'] }}</p>
        @break
        @default
    @endswitch
</div>



Thanks,<br>
{{ nova_get_setting('email_site_name') }}

</td>
</tr>
</table>
</td>
</tr>

{{-- Footer --}}
<tr>
    <td>
    <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td class="content-cell" align="center">
        <p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; line-height: 1.5em; margin-top: 0; color: #b0adc5; font-size: 12px; text-align: center;">
            © {{ date('Y') }} {{ nova_get_setting('email_site_name') ?? config('app.name') }}. @lang('All rights reserved.')
        </p>
    </td>
    </tr>
    </table>
    </td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
