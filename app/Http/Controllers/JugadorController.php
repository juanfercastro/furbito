<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function listJugadores($id){
        $data['jugadores'] = Jugador::find();
    }
}
