<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function infos () // Mediante un Tag podemos obtener sus Infos. Relación: Many To Many
    {
        return $this->belongsToMany(Info::class);
    }
}
