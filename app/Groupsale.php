<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupsale extends Model
{
    protected $table = 'groupsales';
    protected $primaryKey = 'groupsale_id';
    protected $fillable = ['groupsale_name','groupsale_des'];

    //Group Sale Has Many Sales
    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
