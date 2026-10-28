@extends('layouts.app')

@section('title', 'Daftar Misi')

@section('content')
<h2 class="mb-4">Daftar Misi</h2>

<div class="row">
@foreach($missions as $m)
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <span class="badge bg-secondary">{{ $m['category'] }}</span>
                <h5 class="card-title mt-2">{{ $m['title'] }}</h5>
                <p class="text-muted">{{ $m['xp'] }} XP</p>
                <button class="btn btn-primary btn-join">Ambil Misi</button>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection

@push('scripts')
<script>
$('.btn-join').on('click', function () {
    $(this).text('Terdaftar').removeClass('btn-primary').addClass('btn-success').prop('disabled', true);
});
</script>
@endpush