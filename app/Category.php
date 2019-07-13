<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function property()
    {
        return $this->hasMany('App\Property');
    }
}
