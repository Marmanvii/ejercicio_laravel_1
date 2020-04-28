<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'infos';

    public function classification () // Mediante una Info podemos obtener Classification. Realación: One To Many (Inverse)
    {
        return $this->belongsTo(Classification::class);
    }

    public function tags () // Mediante una Info podemos obtener sus Tags. Relación: Many To Many
    {
        return $this->belongsToMany(Tag::class);
    }

}
