<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Torneo extends Model
{
    public function equipos():BelongsToMany{
        return $this->belongsToMany(Equipo::class, 'equipo_torneo')
                        ->withPivot('anho');
    }
}
