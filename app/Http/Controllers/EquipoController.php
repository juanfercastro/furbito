<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function addEquipo(Request $r){
        $equipo  = new Equipo();
        $equipo->nombre = $r->get('name');
        $equipo->num_socios = $r->get('socios');

        $equipo->save();

        return redirect()->route('listaEquipos');
    }

    public function listEquipos(){
        $data['equipos'] = Equipo::all();
        return view('list-equipos', $data);
    }
}
