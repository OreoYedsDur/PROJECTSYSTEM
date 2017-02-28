<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'province_id';
    //Province Has Many Location
    public function locations()
    {
        return $this->hasMany('App\Location');
    }
}
