@extends('layouts.app')

@section('content')
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['description'] }}</p>
        <p><strong>{{ __('messages.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('messages.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>
</div>

<h2>{{ __('messages.registered_clients') }}</h2>
<table class="table table-bordered bg-white">
    <thead><tr><th>{{ __('messages.first_name') }}</th><th>{{ __('messages.last_name') }}</th><th>{{ __('messages.email') }}</th></tr></thead>
    <tbody>
    @foreach ($registrations as $registration)
        <tr><td>{{ $registration['first_name'] }}</td><td>{{ $registration['last_name'] }}</td><td>{{ $registration['email'] }}</td></tr>
    @endforeach
    </tbody>
</table>
@endsection
