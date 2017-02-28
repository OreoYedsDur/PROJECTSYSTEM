<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    protected $fillable = ['project_name'];

    //Project Has Many Service
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
