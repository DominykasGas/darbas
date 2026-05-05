@extends('layouts.app')

@section('content')
<h1>{{ __('messages.all_conferences') }}</h1>
<table class="table table-striped table-hover bg-white shadow-sm mt-3">
    <thead><tr><th>{{ __('messages.title') }}</th><th>{{ __('messages.date') }}</th><th>{{ __('messages.actions') }}</th></tr></thead>
    <tbody>
    @foreach ($conferences as $conference)
        <tr>
            <td>{{ $conference['title'] }}</td>
            <td>{{ $conference['date'] }} {{ $conference['time'] }}</td>
            <td><a class="btn btn-sm btn-outline-primary" href="{{ route('employee.conferences.show', $conference['id']) }}">{{ __('messages.view') }}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
