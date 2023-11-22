@php \Carbon\Carbon::setLocale('en'); @endphp
{{ $data->created_at->diffForHumans() }}