<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'service_id';
    protected $fillable = ['project_id','location_id','servicetype_id','package_id','service_status',
        'service_order','domedown','domeup','interdown','interup','gen_date','open_commit','start_contract',
        'end_contract','cacti_url','ipptp','remark','customer_id'];

    //Service Has One Service Type
    public function servicetype()
    {
        return $this->belongsTo('App\Servicetypes','servicetype_id');
    }

    //Service Has One Project
    public function project()
    {
        return $this->belongsTo('App\Project','project_id');
    }

    //Service Has One Package
    public function package()
    {
        return $this->belongsTo('App\Package','package_id');
    }

    //Service Has One Customer
    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }

    //Service Has One Location
    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }



    //Mutators
    public function setGenDateAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['gen_date'] = $value;
        } else {
            $this->attributes['gen_date'] = null;
        }
    }

    public function setOpenCommitAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['open_commit'] = $value;
        } else {
            $this->attributes['open_commit'] = null;
        }
    }

    public function setStartContractAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['start_contract'] = $value;
        } else {
            $this->attributes['start_contract'] = null;
        }
    }

    public function setEndContractAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['end_contract'] = $value;
        } else {
            $this->attributes['end_contract'] = null;
        }
    }


}
