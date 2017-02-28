<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicetypes extends Model
{
    protected $table = 'servicetypes';
    protected $primaryKey = 'servicetype_id';
    protected $fillable = ['servicetype_name'];

    //Service Type Has Many Service
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
