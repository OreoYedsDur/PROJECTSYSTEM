<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'sale_id';
    protected $fillable = ['sale_name','sale_tel','sale_address','groupsale_id','sale_email','sale_line'];

    //Sale Has One Groupsale
    public function groupsale()
    {
        return $this->belongsTo('App\Groupsale','groupsale_id');
    }

    //Sale Has Many Customer
    public function customers()
    {
        return $this->hasMany('App\Customer');
    }
}
