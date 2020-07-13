@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <b>Información...</b>
                    </h2>
                </div>
                    <div class="card-body">
                        {{-- Formulario de edicion --}}
                        <div class="container">
                            <div class="card-header"> 
                                <center>
                                    <h4>La Ruleta</h4>
                                </center>
                            </div>
                            <div class="row">
                                <div class="col-responsive-ms">
                                    <p>
                                        o Los jugadores parten con una cantidad de $10.000 por defecto.
                                    </p>
                                    <p>
                                        o En cada ronda los jugadores apuestan entre un 8% y 15% del total de dinero que poseen. Si
                                        tienen $1.000 o menos, van All In. Si no les queda dinero, no apuestan.
                                    </p>
                                    <p>
                                        o El modo de apuesta es el siguiente, un jugador puede apostar a Green, red o Black con un
                                        2%, 49% y 49% de probabilidad respectivamente.
                                    </p>
                                    <p>
                                        o Un jugador recupera el doble de lo apostado si acierta su apuesta, cuando ésta sea red o
                                        Black, y recupera 15 veces lo apostado en caso de acertar Green. En caso de perder la
                                        apuesta, no recupera nada.
                                    </p>
                                    <p>
                                        o Un jugador recupera el doble de lo apostado si acierta su apuesta, cuando ésta sea red o
                                        Black, y recupera 15 veces lo apostado en caso de acertar Green. En caso de perder la
                                        apuesta, no recupera nada.
                                    </p>
                                    <p>
                                        o La ruleta entrega resultados con la misma probabilidad que los jugadores hacen apuestas, es
                                        decir, Green 2%, red 49% y Black 49%.
                                    </p>
                                    <p>
                                        Juega y Disfruta!!
                                    </p>
                                </div>
                                <a href="{{route('index')}}"class="btn btn-info" >Volver</a>
                            </div>    
                        </div>
                        {{-- Fin de formulario --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
