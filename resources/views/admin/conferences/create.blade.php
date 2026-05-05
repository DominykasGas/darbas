@extends('layouts.app')

@section('content')
<h1>{{ __('messages.create_conference') }}</h1>
<form action="{{ route('admin.conferences.store') }}" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf
    @include('admin.conferences._form')
    <button class="btn btn-primary">{{ __('messages.save') }}</button>
</form>
@endsection
