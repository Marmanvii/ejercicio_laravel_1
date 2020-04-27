<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function classification () 
    {
        return $this->hasOne(classification::class);
    }
}
