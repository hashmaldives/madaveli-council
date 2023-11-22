@php \Carbon\Carbon::setLocale('dv'); @endphp
{{ $data->created_at->diffForHumans() }}