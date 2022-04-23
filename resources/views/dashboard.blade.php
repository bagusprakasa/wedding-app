@extends('layouts.template')

{{-- @section('page-header')
    @include('components.page-header', [
        'pageTitle' => 'Dashboard',
        'pageSubtitle' => '',
        'pageIcon' => 'feather icon-home',
        'parentMenu' => '',
        'current' => 'Dashboard',
    ])
@endsection --}}

@include('components.notification')
@section('content')
    <div class="row mt-4">
        <div class="col">
            <div class="alert alert-primary font-weight-bold">Selamat Datang Di Aplikasi Wedding Invitation</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card bg-rgb-info border border-info">
                <div class="card-body py-4">
                    <span class="fas fa-check-square sticky-fa-card"></span>
                    <div class="row align-items-center">
                        <div class="col-md-8 pr-0 font-weight-bold">
                            Undangan Hadir
                        </div>
                        <div class="col-md-4 pr-0 text-center">
                            <h1>{{ \App\Models\Visitor::where('present', '1')->count() }}</h1>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-rgb-warning border border-info">
                <div class="card-body py-4">
                    <span class="fas fa-exclamation-triangle sticky-fa-card"></span>
                    <div class="row align-items-center">
                        <div class="col-md-8 pr-0 font-weight-bold">
                            Undangan Tidak Hadir
                        </div>
                        <div class="col-md-4 pr-0 text-center">
                            <h1>{{ \App\Models\Visitor::where('present', '0')->count() }}</h1>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
