<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function listJugadoresEquipo($id){
        $data['jugadores'] = Jugador::where('id_equipo', $id)->get();
        return view('list-jugadores', $data);
    }
}
