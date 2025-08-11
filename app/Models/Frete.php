<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    public function etapas()
    {
        return $this->hasMany(Etapa::class);
    }
}
