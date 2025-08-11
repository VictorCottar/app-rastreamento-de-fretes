<?php

namespace App\Models;

use App\Enums\FreteStatus;
use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    protected $casts = [
        'status' => FreteStatus::class,
    ];

    public function etapas()
    {
        return $this->hasMany(Etapa::class);
    }
}
