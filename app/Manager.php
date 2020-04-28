<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function classification () // Mediante un Manager se puede obtener su Classification. Relación: One to One
    {
        return $this->hasOne(classification::class);
    }
}
