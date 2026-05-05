@extends('layouts.app')

@section('content')
<h1>{{ __('messages.edit_user') }}</h1>
<form action="{{ route('admin.users.update', $user['id']) }}" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">{{ __('messages.first_name') }}</label>
        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $user['first_name']) }}" required>
        @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('messages.last_name') }}</label>
        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $user['last_name']) }}" required>
        @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('messages.email') }}</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user['email']) }}" required>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <button class="btn btn-primary">{{ __('messages.save') }}</button>
</form>
@endsection
