@extends('adminlte::page')

@section('title', 'Photos')

@section('content_header')
    <h1><i class="fas fa-camera mr-2"></i> Galería de Fotos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p class="lead">Aquí encontrarás todas nuestras fotografías.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-secondary text-white text-center p-4">
                        <i class="fas fa-image fa-3x"></i>
                        <p class="mt-2">Foto 1</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary text-white text-center p-4">
                        <i class="fas fa-image fa-3x"></i>
                        <p class="mt-2">Foto 2</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary text-white text-center p-4">
                        <i class="fas fa-image fa-3x"></i>
                        <p class="mt-2">Foto 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop