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
        <form action="{{ route('client.conferences.register', $conference['id']) }}" method="POST">
            @csrf
            <button class="btn btn-primary">{{ __('messages.register') }}</button>
        </form>
    </div>
</div>
@endsection
