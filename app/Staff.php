<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'hr_staffs';
    protected $guarded  = [];

    public function Positions(){
        return $this->belongsTo('App\Position', 'hr_position_id');
    }

    public function Departments(){
        return $this->belongsTo('App\Department', 'hr_department_id');
    }

    public function Units(){
        return $this->belongsTo('App\Unit', 'hr_unit_id');
    }
    
}
