@extends('layouts.app')

@section('content')
<h1>{{ __('messages.conference_list') }}</h1>
<div class="row g-4 mt-2">
    @foreach ($conferences as $conference)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $conference['title'] }}</h5>
                    <p class="card-text">{{ $conference['description'] }}</p>
                    <p class="text-muted">{{ $conference['date'] }} {{ $conference['time'] }}</p>
                    <a href="{{ route('client.conferences.show', $conference['id']) }}" class="btn btn-outline-primary">{{ __('messages.view') }}</a>
                    <form action="{{ route('client.conferences.register', $conference['id']) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-primary">{{ __('messages.register') }}</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
