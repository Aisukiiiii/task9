@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
    <h1><i class="fas fa-envelope mr-2"></i> Contacto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p class="lead">¿Tienes alguna duda? Contáctanos.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fas fa-envelope mr-2 text-primary"></i> contacto@gmail.com</li>
                <li class="list-group-item"><i class="fas fa-phone mr-2 text-success"></i> +52 644 000 0000</li>
                <li class="list-group-item"><i class="fas fa-map-marker-alt mr-2 text-danger"></i> Culiacan, Sinaloa</li>
            </ul>
        </div>
    </div>
@stop