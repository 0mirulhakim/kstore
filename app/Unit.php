<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'hr_units';
    protected $guarded  = [];

    public function Staff(){
        return $this->hasMany('App\Staff');
    }

    public function dynamic_dependent(){
        return $this->belongsTo('App\Department', 'hr_department_id');
    }
}
