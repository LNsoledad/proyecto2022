@extends('adminlte::page')

@section('title', 'SIGT')

@section('content_header')
    <h1>Sistema Inteligente de Gestion de Turnos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola Mundo</h1>
        </div>

        <div class="card-body">
            <p>Welcome to this beautiful admin panel.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop