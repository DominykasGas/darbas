@extends('layouts.app')

@section('content')
<h1>{{ __('messages.edit_conference') }}</h1>
<form action="{{ route('admin.conferences.update', $conference['id']) }}" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf
    @method('PUT')
    @include('admin.conferences._form')
    <button class="btn btn-success">{{ __('messages.save') }}</button>
</form>
@endsection
