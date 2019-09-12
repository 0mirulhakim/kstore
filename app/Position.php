<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'hr_positions';
    protected $guarded  = [];

    public function Staff(){
        return $this->hasMany('App\Staff');
    }
}
