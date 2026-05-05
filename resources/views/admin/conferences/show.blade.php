@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['description'] }}</p>
        <p><strong>{{ __('messages.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('messages.date') }}:</strong> {{ $conference['date'] }}</p>
        <p><strong>{{ __('messages.time') }}:</strong> {{ $conference['time'] }}</p>
        <p><strong>{{ __('messages.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>
</div>
@endsection
