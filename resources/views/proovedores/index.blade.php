@extends('layouts.app')

@section('title', 'Proovedores')

@section('content')

    <br>
    <h2 class="text-center">Proovedores Registrados</h2>
    <br>

    <div class="row">
        @foreach ($proveer as $provide)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($provide->imagen) }}"
                        class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $provide->nombre }}</h5>
                        <a href="/proovedores/{{ $provide->id }}" class="btn btn-success">Mas información</a>
                    </div>
                </div>

            </div>
        @endforeach

    </div>

@endsection
