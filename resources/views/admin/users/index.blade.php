@extends('layouts.app')

@section('content')
<h1>{{ __('messages.user_management') }}</h1>
<table class="table table-striped bg-white shadow-sm mt-3">
    <thead><tr><th>{{ __('messages.first_name') }}</th><th>{{ __('messages.last_name') }}</th><th>{{ __('messages.email') }}</th><th>{{ __('messages.actions') }}</th></tr></thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['first_name'] }}</td>
            <td>{{ $user['last_name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td><a class="btn btn-sm btn-warning" href="{{ route('admin.users.edit', $user['id']) }}">{{ __('messages.edit') }}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
