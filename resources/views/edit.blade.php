@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <b>Edición de Jugadores</b>
                    </h2>
                </div>
                    <div class="card-body">
                        {{-- Formulario de edicion --}}
                        <div class="card-header"> 
                            <div class="row">
                                <h4 class="col-sm">Editar : {{$player->name}}</h4>
                                <h4 class="col-sm">Fondos del Jugador: {{$player->money}}</h4>
                            </div>
                        </div>
                        <form action="{{route('update', $player->id)}}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="row">
                            <div class="col-sm">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$player->name}}"required>
                            </div>
                            <div class="col-sm">
                                <label for="money">Apostar Mas Dinero</label>
                                <input type='text' step='0.01' class="form-control" id="money" name="money" value="{{$player->money='0'}}" required>
                            </div>
                            <div class="col-sm">
                                <label for="color">Color a apostar </label>
                                <select class="form-control" id="color" name="color" value="{{$player->color}}">
                                    <option class="Green card-footer bg-success text-white text-center" value="Green" {{$player->color=="Green" ? "selected" : ''}}>Green</option>
                                    <option class="red card-footer bg-danger text-white text-center" value="Red" {{$player->color=="Red" ? "selected" : ''}}>Red</option>
                                    <option class="Black card-footer bg-dark text-white text-center" value="Black" {{$player->color=="Black" ? "selected" : ''}}>Black</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label for="bet">Apuestas de 8 a 15% </label>
                                <select class="form-control" id="bet" name="bet">
                                    <option {{$player->bet==8 ? "selected" : ''}}>8</option>
                                    <option {{$player->bet==9 ? "selected" : ''}}>9</option>
                                    <option {{$player->bet==10 ? "selected" : ''}}>10</option>
                                    <option {{$player->bet==11 ? "selected" : ''}}>11</option>
                                    <option {{$player->bet==12 ? "selected" : ''}}>12</option>
                                    <option {{$player->bet==13 ? "selected" : ''}}>13</option>
                                    <option {{$player->bet==14 ? "selected" : ''}}>14</option>
                                    <option {{$player->bet==15 ? "selected" : ''}}>15</option>
                                </select>
                            </div>
                            </div>
                            <br>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{route('index')}}"class="btn btn-danger" >Volver</a>
                            </form>

                            @if(session('update'))
                            <div class="alert alert-success mt-3">
                                {{ session('update') }}
                            </div>
                            @endif
                        {{-- Fin de formulario --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
