<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'hr_departments';
    protected $guarded  = [];

    public function Staff(){
        return $this->hasMany('App\Staff');
    }

    public function Unit(){
        return $this->hasMany('App\Unit');
    }
}
