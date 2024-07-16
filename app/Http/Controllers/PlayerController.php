<?php

namespace App\Http\Controllers; //aca coloco el controllador
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function listar()
    {

        $players = Player::orderBy('id', 'desc')->get(); //lo que esta en verde es el nombre del modelo y ya define $books en plural 
        return view('jugadores.listar', compact('players')); //view va el nombre de la carpeta.y el nombre del documento de listar
    }    //y ese compact va en plural BOOKs

    public function create()
    {
        $players = Player::orderBy('id', 'desc')->get();
        return view('jugadores.create', compact('players'));
    }

    public function store(Request $request)
    {
        $player = new Player(); //lo verde es el nombre del modelo y creo una variable $player
        $player->codigo = $request->codigo; //aca va los atributos como coloco en la migracion 
        $player->nombre = $request->nombre;
        $player->fecha_nacimiento = $request->fecha_nacimiento;
        $player->posicion = $request->posicion;
        $player->save();
        return $player;
    }

    public function edit(Player $player)
    { //lo verde es el model y lo otro es la variable book en singular
        return view('jugadores.edit', compact('player')); //aca entro a la carpeta libro y despues va el nombre del archivo editar que esta en views
    }

    public function update(Request $request, Player $player)
    {
        $player->codigo = $request->codigo;
        $player->nombre = $request->nombre;
        $player->fecha_nacimiento = $request->fecha_nacimiento;
        $player->posicion = $request->posicion;
        $player->save();

        return redirect()->route('player.listar'); //aca lo direciono a la vista view de listar el nombre del controllador y la funcion listar
    }

    public function show($id)
    { //$id
        $player = Player::find($id);
        return view('jugadores.show', compact('player'));
    }

    public function destroy(Player $player)
    { //lo verde es el modelo
        $player->delete(); //aca coloco en singular el book
        return redirect()->route('player.listar'); //aca hago lo mismo de arriba
    }
}
