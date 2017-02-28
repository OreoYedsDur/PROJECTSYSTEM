<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbooks';
    protected $primaryKey = 'logbook_id';
    protected $fillable = ['logbook_title','logbook_body','customer_id'];


    //Logbook Has One Customer
    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }
}
