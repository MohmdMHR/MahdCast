<?php

namespace Mahdcast;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded= [];

    public function getRouteKeyName(){
        return 'slug';
    }
}
