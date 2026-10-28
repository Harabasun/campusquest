@extends('layouts.app')

@section('title', 'Leaderboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Leaderboard</h2>
    <select id="filter" class="form-select w-auto">
        <option value="all">Seluruh Universitas</option>
        @foreach($faculties as $f)
            <option value="{{ $f }}">{{ $f }}</option>
        @endforeach
    </select>
</div>

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0" id="board">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Level</th>
                    <th>XP</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $i => $p)
                <tr data-faculty="{{ $p['faculty'] }}" class="{{ $p['name'] === 'Budi Santoso' ? 'table-danger' : '' }}">
                    <td class="rank fw-bold">{{ $i + 1 }}</td>
                    <td>{{ $p['name'] }} @if($p['name'] === 'Igor Simanjuntak')<span class="badge bg-primary">Kamu</span>@endif</td>
                    <td>{{ $p['faculty'] }}</td>
                    <td>Lv {{ $p['level'] }}</td>
                    <td>{{ number_format($p['xp']) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
$('#filter').on('change', function () {
    const faculty = $(this).val();
    let rank = 1;

    $('#board tbody tr').each(function () {
        const show = faculty === 'all' || $(this).data('faculty') === faculty;
        $(this).toggle(show);
        if (show) {
            $(this).find('.rank').text(rank++);
        }
    });
});
</script>
@endpush