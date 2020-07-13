@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                            <h2 class="col-responsive-ms"><b>Resultados de Apuestas</b></h2>
                        </div>
                    </div>
                    
                    <div class="card-body">

                        <div class="container">
                                <div class="card-header"> 
                                    <center>
                                        <h4>Informacion Jugadores</h4>
                                    </center>
                                </div>
                                <div class="card-header"> 
                                    <center>
                                        <a href="{{route('index')}}" class="btn btn-info" >Volver</a>

                                        @if ($info["total"] == '0' || $info["total"] < '1000' )
                                            <a href="{{route('index')}}" class="btn btn-light">No Apuestas</a>                                        
                                        @else 
                                            @if ($info["rColor"] == "Green")
                                                <a href="javascript:location.reload()" class="btn btn-success">Apostar</a>
                                            @elseif ($info["rColor"] == "Red")
                                                <a href="javascript:location.reload()" class="btn btn-danger">Apostar</a>
                                            @elseif ($info["rColor"] == "Black")
                                                <a href="javascript:location.reload()" class="btn btn-dark">Apostar</a>
                                            @elseif ($info["rColor"] == "")
                                                <a href="javascript:location.reload()" class="btn btn-info">Apostar</a>
                                            @endif
                                        @endif
                                        <br><p>El color del boton Apostar es el color ganador en la ronda jugada.</p>
                                    </center>
                                </div>
                            <table id="datatable" class="table-responsive-sm table table-striped ">
                                <thead class="thead-info">
                                    <tr>
                                        <th scope="col">Apuesta</th>
                                        <th scope="col">Apostate</th>
                                        <th scope="col">Valor Apuesta</th>
                                        <th scope="col">Equivalente de Apuseta</th>
                                        <th scope="col">Resultado Apuesta</th>
                                        <th scope="col">Saldo Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">
                                            @if ($info["cPlayer"] == 'Green')
                                                Verde
                                            @endif
                                            @if ($info["cPlayer"] == 'Red')
                                                Rojo
                                            @endif
                                            @if ($info["cPlayer"] == 'Black')
                                                Negro
                                            @endif
                                        </th>
                                        <th scope="col">{{$info["bet"]}}%</th>
                                        <th scope="col">${{$info["valor"]}}</th>
                                        <th scope="col">${{$info["wine"]}}</th>
                                        <th scope="col">
                                            @if ($info["cPlayer"] == 'Green')
                                                Ganaste 15 veces tu Apuesta
                                            @endif
                                            @if ($info["cPlayer"] == 'Red')
                                                Ganaste el Doble
                                            @endif
                                            @if ($info["cPlayer"] == 'Black')
                                                Ganaste el Doble
                                            @endif
                                            @if ($info["cPlayer"] == '')
                                                Gana la Casa
                                            @endif
                                        </th>
                                        
                                        <th scope="col">${{$info["total"]}}</th>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
