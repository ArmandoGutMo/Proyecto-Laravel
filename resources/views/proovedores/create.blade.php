@extends('layouts.app')

@section('title', 'Proovedores')

@section('content')

<br>
    <h2>Agregar un proovedor</h2>
    <form action="/proovedores" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombreproovedor" class="form-label">Nombre del proovedor</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="nit" class="form-label">Nit</label>
            <input type="text" class="form-control" id="nit" name="nit">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <br>
          <div class="mb-3">
            <label for="imagen" class="form-label">Subir imagen</label>
            <br>
            <input id="imagen" type="file" name="imagen">
          </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>



@endsection
