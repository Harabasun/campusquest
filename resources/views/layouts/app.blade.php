<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CampusQuest')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --bs-primary: #d90429;
        --bs-primary-rgb: 217, 4, 41;
    }
    .btn-primary {
        --bs-btn-bg: #d90429;
        --bs-btn-border-color: #d90429;
        --bs-btn-hover-bg: #b8031f;
        --bs-btn-hover-border-color: #b8031f;
        --bs-btn-active-bg: #a00219;
        --bs-btn-active-border-color: #a00219;
        --bs-btn-disabled-bg: #d90429;
        --bs-btn-disabled-border-color: #d90429;
    }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">CampusQuest</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/dashboard">Dashboard</a>
            <a class="nav-link" href="/missions">Misi</a>
            <a class="nav-link" href="/leaderboard">Leaderboard</a>
        </div>
    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>