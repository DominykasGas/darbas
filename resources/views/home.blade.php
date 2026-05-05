@extends('layouts.app')

@section('content')
<div class="hero-card p-5 rounded-4 shadow-sm bg-white">
    <h1 class="mb-3">{{ __('messages.home_title') }}</h1>
    <p class="lead mb-4">{{ __('messages.student_info') }}: Vardas Pavardė, PI23A</p>

    <div class="row g-3">
        <div class="col-md-4"><a class="btn btn-primary w-100 py-3" href="{{ route('client.conferences.index') }}">{{ __('messages.client_subsystem') }}</a></div>
        <div class="col-md-4"><a class="btn btn-success w-100 py-3" href="{{ route('employee.conferences.index') }}">{{ __('messages.employee_subsystem') }}</a></div>
        <div class="col-md-4"><a class="btn btn-dark w-100 py-3" href="{{ route('admin.index') }}">{{ __('messages.admin_subsystem') }}</a></div>
    </div>
</div>
@endsection
