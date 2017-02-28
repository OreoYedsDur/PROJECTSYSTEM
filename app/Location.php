<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'location_id';
    protected $fillable = ['location_type','location_des','location_address','province_id','customer_id'];

    //Location Has One Province
    public function province()
    {
        return $this->belongsTo('App\Province','province_id');
    }

    //Location Has One Customer
    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }

    //Location Has Many Service
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
