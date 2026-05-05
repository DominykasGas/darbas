@extends('layouts.app')

@section('content')
<h1>{{ __('messages.admin_panel') }}</h1>
<div class="row g-4 mt-2">
    <div class="col-md-6">
        <a class="admin-link-card p-4 bg-white rounded-4 shadow-sm d-block text-decoration-none" href="{{ route('admin.users.index') }}">
            <h3>{{ __('messages.user_management') }}</h3>
            <p>{{ __('messages.user_management_description') }}</p>
        </a>
    </div>
    <div class="col-md-6">
        <a class="admin-link-card p-4 bg-white rounded-4 shadow-sm d-block text-decoration-none" href="{{ route('admin.conferences.index') }}">
            <h3>{{ __('messages.conference_management') }}</h3>
            <p>{{ __('messages.conference_management_description') }}</p>
        </a>
    </div>
</div>
@endsection
