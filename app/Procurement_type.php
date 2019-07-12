<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procurement_type extends Model
{
    protected $table = 'aset_procurement_types';
    protected $guarded  = [];

    public function Printers(){
        return $this->hasMany('Printer');
    }
}
