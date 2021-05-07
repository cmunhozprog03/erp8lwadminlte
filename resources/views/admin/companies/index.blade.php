@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.companies.create') }}">Nova Empresa</a>
    <h1>Empresas</h1>
@stop

@section('content')
    @livewire('admin.company-index')
@stop

@section('css')
    
@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jQuery-Mask-Plugin/dist/jquery.mask.min.js') }}"> </script>
@stop