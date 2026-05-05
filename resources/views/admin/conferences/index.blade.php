@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>{{ __('messages.conference_management') }}</h1>
    <a class="btn btn-success" href="{{ route('admin.conferences.create') }}">{{ __('messages.create_conference') }}</a>
</div>
<table class="table table-striped bg-white shadow-sm mt-3">
    <thead><tr><th>{{ __('messages.title') }}</th><th>{{ __('messages.date') }}</th><th>{{ __('messages.address') }}</th><th>{{ __('messages.actions') }}</th></tr></thead>
    <tbody>
    @foreach ($conferences as $conference)
        <tr>
            <td>{{ $conference['title'] }}</td>
            <td>{{ $conference['date'] }} {{ $conference['time'] }}</td>
            <td>{{ $conference['address'] }}</td>
            <td>
                <a class="btn btn-sm btn-outline-success" href="{{ route('admin.conferences.show', $conference['id']) }}">{{ __('messages.view') }}</a>
                <a class="btn btn-sm btn-warning" href="{{ route('admin.conferences.edit', $conference['id']) }}">{{ __('messages.edit') }}</a>
                <form action="{{ route('admin.conferences.destroy', $conference['id']) }}" method="POST" class="d-inline js-delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">{{ __('messages.delete') }}</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
