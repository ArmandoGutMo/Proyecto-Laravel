@extends('layouts.app')

@section('title', 'Informacion proovedor')

@section('content')

<div class="text-center">
    <img style="height: 350px; width:350px; margin:15px" src="{{ Storage::url($proveer->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">Nombre: {{$proveer->nombre}}</p>
        <p class="card-text">Nit: {{$proveer->nit}}</p>
        <p class="card-text">Telefono: {{$proveer->telefono}}</p>
        <p class="card-text">Email: {{$proveer->email}}</p>
    </div>
    <br>
    <a href="/proovedores/{{$proveer->id}}/edit" class="btn btn-danger">Editar Información</a>
</div>
<br>
<br>

@endsection

