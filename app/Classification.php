<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    
    public function manager () 
    {
        return $this->belongsTo(Manager::class);
    }
    
}
