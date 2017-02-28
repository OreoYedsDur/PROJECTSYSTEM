<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['customer_name','customer_tel','customer_des','sale_id'];

    //Customer Has One Sale
    public function sale()
    {
        return $this->belongsTo('App\Sale','sale_id');
    }

    //Customer Has Many Service
    public function services()
    {
        return $this->hasMany('App\Service');
    }

    //Customer Has Many Location
    public function locations()
    {
        return $this->hasMany('App\Location');
    }

    //Customer Has Many Logbook
    public function logbooks()
    {
        return $this->hasMany('App\Logbook');
    }

    //Customer Has Many Contact
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }
}
