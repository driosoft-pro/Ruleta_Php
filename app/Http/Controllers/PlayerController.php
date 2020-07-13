<?php

namespace App\Http\Controllers;

use DB;
use App\Player;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class PlayerController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Apostador
        $players =  Player::orderBy('id','Desc')->paginate(5);
        //Vitas principal
        return view('index', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Nuevo jugador
        $player = new Player;

        $player->name = $request->get('name');
        $player->money = 10000;
        $player->color = $request->get('color');
        $player->bet = $request->get('bet');

        $player->save();

        return back()->with('insert');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Selecciona el jugador a editar
        $player = Player::findOrFail($id);
        //Muesta el jugador a editar
        return view('edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);

        $player->name = $request->get('name');
        //sumar la cantida al saldo del jugador
        $player->money = $player->money+$request->get('money');
        $player->color = $request->get('color');
        $player->bet = $request->get('bet');

        $player->update();

        return back()->with('update', 'Actualizo!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Selccion de jugador a eliminar
        $player = Player::findOrFail($id);
        $eliminado = $player->name;
        //eliminacion de jugador
        $player->delete();
        return back()->with('destroy');
    }

        /**
     * Display a listing of the resource.
     *
     * Funsion genera los randos de los jugadores al apostar
     */
    public function bet($id){
        //Apostador
        $player = Player::findOrFail($id);

        //Variable de inicio
        $wMoney = 0;
        $rColor ="";
        $rand = rand(0, 100);
        
        //Condicion para verificar la apuesta
        if($player->money <= 1000){
            $vBet = $player->money;
        }else if($player->money <= 0){
            $vBet = 0;
        }else{
            $vBet = ($player->money * $player->bet)/100;
        }

        //Condicion randon para la Ruleta
        if($rand/100 < 0.02){
            $rColor = "Green";
        }else if($rand/100 < 0.49){
            $rColor = "Red";
        }else if($rand/100 < 1){
            $rColor = "Black";
        }
        
        //Condiciones para recuperar el dinero
        if($rColor == "Red" && $player->color == $rColor){
            $wMoney = $vBet*2;
            $total = $player->money+$wMoney;
            $info = ['valor'=>$vBet,'wine'=> $wMoney, 'rColor' =>$rColor ,'cPlayer' =>$player->color, 'total'=>$total, "bet" => $player->bet];
        }else if($rColor == "Black" && $player->color == $rColor){
            $wMoney = $vBet*2;
            $total = $player->money+$wMoney;
            $info = ['valor'=>$vBet,'wine'=> $wMoney, 'rColor' =>$rColor ,'cPlayer' =>$player->color, 'total'=>$total, "bet" => $player->bet];
        }else if($rColor == "Green" && $player->color == $rColor){
            $wMoney = $vBet*15;
            $total = $player->money+$wMoney;
            $info = ['valor'=>$vBet,'wine'=> $wMoney, 'rColor' =>$rColor ,'cPlayer' =>$player->color, 'total'=>$total, "bet" => $player->bet];
        }else{
            $wMoney =$vBet;
            $total = $player->money-$wMoney;
            $info = ['valor'=>$vBet,'wine'=> $wMoney, 'rColor' =>$rColor ,'cPlayer' =>$player->color, 'total'=>$total, "bet" => $player->bet];
        }

        //Resultado de apuesta
        $player->money = $total;
        $player->update();
        
        //Vista informativa de las apuesta
        return view('results', compact('info'));
        
    }

    public function info()
    {
        //Vista informcio del juego de la ruleta
        return view('info');
    }

}
