<?php

namespace App\Http\Controllers; //aca coloco el controllador

use App\Models\President;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function listar()
    {
        $teams = Team::orderBy('id', 'desc')->get(); //lo que esta en verde es el nombre del modelo y ya define $books en plural 
        return view('equipos.listar', compact('teams')); //view va el nombre de la carpeta.y el nombre del documento de listar
    }    //y ese compact va en plural BOOKs

    public function create()
    {
        $presidents= President::all();
        $teams = Team::all();
        return view('equipos.create', compact('teams','presidents'));
    }

    public function store(Request $request)
    {
        $team = new Team(); //lo verde es el nombre del modelo y creo una variable $player
        $team->codigo = $request->codigo; //aca va los atributos como coloco en la migracion 
        $team->nombre = $request->nombre;
        $team->ciudad = $request->ciudad;
        $team->estadio = $request->estadio;
        $team->aforo = $request->aforo;
        $team->anio = $request->anio;
        
        $team->president_id = $request->president_id;
        $team->save();
        // return $team;
        return redirect()->route('team.listar'); 
    }

    public function edit(Team $team)
    { //lo verde es el model y lo otro es la variable book en singular
        return view('equipos.edit', compact('team')); //aca entro a la carpeta libro y despues va el nombre del archivo editar que esta en views
    }

    public function update(Request $request, Team $team)
    {
        $team = new Team(); 
        $team->codigo = $request->codigo;  
        $team->nombre = $request->nombre;
        $team->ciudad = $request->ciudad;
        $team->estadio = $request->estadio;
        $team->aforo = $request->aforo;
        $team->anio = $request->anio;

        $team->president_id = $request->president_id;
        $team->save();
        return redirect()->route('team.listar'); 
    }

    public function show($id)
    { //$id
        $team = Team::find($id);
        return view('equipos.show', compact('team'));
    }

    public function destroy(Team $team)
    { //lo verde es el modelo
        $team->delete(); //aca coloco en singular el book
        return redirect()->route('team.listar'); //aca hago lo mismo de arriba
    }
}
