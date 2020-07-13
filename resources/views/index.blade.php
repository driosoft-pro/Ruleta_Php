@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <b>Juega Ruleta</b>
                    </h2>
                </div>
                    
                    <div class="card-body">

                            {{-- Formulario de insercion de usuario --}}
                            <form action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="card-header"> 
                                    <center>
                                        <h4>Añadir player</h4>
                                    </center>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" id="name" required name="name">
                                    </div>
                                    
                                    <div class="col-sm">
                                        <label for="money">Dinero a apostar</label>
                                        <input type="text" class="form-control" id="money" name="money" value="10000" disabled required>
                                    </div>
                                    
                                    <div class="col-sm">
                                        <label for="color">Seleccione color a apostar</label>
                                        <select class="form-control" id="color" name="color">
                                        <option class="Green card-footer bg-success text-white text-center">Green</option>
                                        <option class="red card-footer bg-danger text-white text-center">Red</option>
                                        <option class="Black card-footer bg-dark text-white text-center">Black</option>
                                        </select>
                                    </div>

                                    <div class="col-sm">
                                        <label for="bet">Porcentaje de dinero a apostar</label>
                                        <select class="form-control" id="bet"  name="bet">
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        </select>
                                    </div>

                                </div>
                                <br>
                                    <button type="submit" class="btn btn-success">Registrar</button>
                            </form>
                                    
                            @if(session('insert'))
                            <div class="alert alert-success mt-3">
                                {{ session('insert') }}
                            </div>
                            @endif
                        {{-- Fin fomulario --}}

                        {{-- Tabla de playeres  --}}
                        <div class="container">
                                <div class="card-header"> 
                                    <center>
                                        <h4>Informacion Jugadores</h4>
                                    </center>
                                </div>
                            <table id="datatable" class="table-responsive-sm table table-striped ">
                                <thead class="thead-info">
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Dinero</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Apuesta</th>
                                        <th scope="col">Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($players as $player)
                                    <tr>
                                    <th>{{ $player->id }}</th>
                                    <td>{{ $player->name }}</td>
                                    <td >${{ $player->money }}</td>
                                    <td>
                                        @if ($player->color  == 'Green')
                                            Verde
                                        @endif
                                        @if ($player->color  == 'Red')
                                            Rojo
                                        @endif
                                        @if ($player->color  == 'Black')
                                            Negro
                                        @endif
                                    </td>
                                    <td>{{ $player->bet }}%</td>
                                    <td>
                                    <a href="{{route('edit', $player->id)}}"class="btn btn-primary" disabled required>Editar</a>

                                    @if ($player->money == '0' || $player->money < '999')
                                        <a class="btn btn-light" >No Apuestas</a>
                                    @else
                                        @if ($player->color == "Green")
                                            <a href="{{route('bet', $player->id)}}"class="btn btn-success" >Apostar</a>
                                        @elseif ($player->color == "Red")
                                            <a href="{{route('bet', $player->id)}}"class="btn btn-danger" >Apostar</a>
                                        @elseif ($player->color == "Black")
                                            <a href="{{route('bet', $player->id)}}"class="btn btn-dark" >Apostar</a>
                                        @endif
                                    @endif
                                    <form action="{{route('destroy', $player->id)}}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Eliminar</button>
                                    </form>
                                    </td>
                                    </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            {{$players->links()}}
                            @if(session('destroy'))
                            <div class="alert alert-success mt-3">
                                {{ session('destroy') }}
                            </div>
                            @endif
                        </div>
                        {{-- Fin de tabla de informacion --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
