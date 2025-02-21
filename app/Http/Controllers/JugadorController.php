<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function altaForm(){
        $equipos = Equipo::all();
        return view('alta-jugadores', ['equipos'=>$equipos]);
    }

    public function listJugadoresEquipo($id){
        $data['jugadores'] = Jugador::where('id_equipo', $id)->get();
        return view('list-jugadores', $data);
    }

    public function addJugador(Request $r){
        $jugador = new Jugador();
        $jugador->nombre = $r->get('name');
        $jugador->apellidos = $r->get('apel');
        $jugador->dorsal = $r->get('dorsal');
        $jugador->f_nac = $r->get('f_nac');
        if ($r->get('team')!=-1) {
            $jugador->id_equipo = $r->get('team');
        }

        $jugador->save();

        return redirect()->route('listaJugadores', $r->get('team'));
    }
}
