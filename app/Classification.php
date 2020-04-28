<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    
    public function manager () // Mediante una Classification podemos obtener su Manager. Relación: One to One
    {
        return $this->hasOne(Manager::class, 'id');
    }

    public function info () // Mediante una Classification podemos obtener sus infos. Realación: One To Many
    {
        return $this->hasMany(Info::class);
    }
    
}
