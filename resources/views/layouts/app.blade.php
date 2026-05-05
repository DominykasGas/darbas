<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.system_title') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">{{ __('messages.system_title') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('client.conferences.index') }}">{{ __('messages.client') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('employee.conferences.index') }}">{{ __('messages.employee') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">{{ __('messages.admin') }}</a></li>
            </ul>
            <div class="d-flex align-items-center">
    <span class="navbar-text me-3">
        {{ __('messages.logged_user') }}: Admin Admin
    </span>

                <button class="btn btn-outline-light" disabled>
                    {{ __('messages.logout') }}
                </button>
            </div>
        </div>
    </div>
</nav>

<main class="container py-4">
    @if (session('success'))
        <div class="alert alert-success js-alert">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger js-alert">{{ session('error') }}</div>
    @endif

    @yield('content')
</main>
</body>
</html>
