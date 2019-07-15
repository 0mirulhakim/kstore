<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'hr_staff';
    protected $guarded  = [];

    public function Positions(){
        return $this->belongsTo('App\Position');
    }

    public function Departments(){
        return $this->belongsTo('App\Department');
    }

    public function Units(){
        return $this->belongsTo('App\Unit');
    }
}
