<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speed extends Model
{
    protected $table = 'speeds';
    protected $primaryKey = 'speed_id';
    protected $fillable = ['speed_name','speed_val'];
}
