@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
@php $percent = round($user['xp'] / $user['next_xp'] * 100); @endphp

<h2 class="mb-1">Halo, {{ $user['name'] }}!</h2>
<p class="text-muted mb-4">{{ $user['faculty'] }}</p>

<div class="row">
    <div class="col-md-8 mb-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5>Level {{ $user['level'] }}</h5>
                    <span class="text-muted">{{ $user['xp'] }} / {{ $user['next_xp'] }} XP</span>
                </div>
                <div class="progress" style="height: 22px;">
                    <div class="progress-bar bg-primary" style="width: {{ $percent }}%">{{ $percent }}%</div>
                </div>
                <small class="text-muted">{{ $user['next_xp'] - $user['xp'] }} XP lagi menuju Level {{ $user['level'] + 1 }}</small>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="row g-3">
            <div class="col-6">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h3 class="mb-0">#{{ $user['rank'] }}</h3>
                        <small class="text-muted">Peringkat</small>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h3 class="mb-0">{{ $user['missions_done'] }}</h3>
                        <small class="text-muted">Misi Selesai</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5 mb-3">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white fw-bold">Badge Saya</div>
            <div class="card-body d-flex flex-wrap gap-2">
                @foreach($badges as $b)
                    <span class="badge bg-primary fs-6">{{ $b['icon'] }} {{ $b['name'] }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-md-7 mb-3">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white fw-bold">Aktivitas Terbaru</div>
            <ul class="list-group list-group-flush">
                @foreach($activities as $a)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            {{ $a['title'] }}
                            <small class="text-muted d-block">+{{ $a['xp'] }} XP</small>
                        </div>
                        @if($a['status'] === 'Disetujui')
                            <span class="badge bg-success">{{ $a['status'] }}</span>
                        @elseif($a['status'] === 'Menunggu')
                            <span class="badge bg-warning text-dark">{{ $a['status'] }}</span>
                        @else
                            <span class="badge bg-secondary">{{ $a['status'] }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection