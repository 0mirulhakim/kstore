<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsetStatus extends Model
{
    protected $table = 'aset_statuss';
    protected $guarded  = [];

    public function Printers(){
        return $this->hasMany('Printer');
    }
}
