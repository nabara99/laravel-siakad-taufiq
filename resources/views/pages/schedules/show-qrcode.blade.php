@extends('layouts.app')

@section('title', 'Absensi Mata Kuliah')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Absensi Mata Kuliah</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Absensi Mata Kuliah</a></div>
                    <div class="breadcrumb-item">Show QRCode</div>
                </div>
            </div>
            <div class="section-body">
                <div class="visible-print text-center">
                    {!! QrCode::size(200)->generate($code) !!}
                    <p>Scan me absen</p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
