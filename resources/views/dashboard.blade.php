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
            <div class="alert alert-primary font-weight-bold">Selamat Datang Di Aplikasi MEMBER</div>
        </div>
    </div>
@endsection
