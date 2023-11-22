@component('mail::message')
# New {{ $resourceData['resourceName'] }} Received

@component('mail::button', ['url' => env('APP_URL') . '/control-panel/resources/' . $resourceData['resourceUrl'] . '/' . $submission['id'] ])
View Submission
@endcomponent

Thanks,<br>
{{ nova_get_setting('email_site_name') }}
@endcomponent