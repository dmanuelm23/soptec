@extends('adminlte::page')
@section('title', 'Sucursal')
@section('content_header')
    <h1>Sucursales</h1>
@stop
@section('content')
    <div class="container">
        @livewire('branch-office-component')
    </div>
@stop

@section('css')
    @livewireStyles
@stop
@section('js')
    @livewireScripts
@stop