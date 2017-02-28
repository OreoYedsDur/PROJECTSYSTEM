<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'package_id';
    protected $fillable = ['package_name'];

    //Package Has Many Service
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
