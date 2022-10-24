@extends('layouts.include.admin.navbar')

@section('isi')
    @if (session('message'))
        <h1 class="alert alert-primary bg-dark opacity-25 mt-2 ">{{ session('message') }}</h1>
    @endif
    <div class="header">
        <h3>Dasboard</h3>
    </div>
@endsection
