<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'contact_id';
    protected $fillable = ['contact_name','contact_position','contact_tel','contact_offtel','contact_email',
        'contact_operator','customer_id'];

    //Contact Has One Customer
    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }
}
