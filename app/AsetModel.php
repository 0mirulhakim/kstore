<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsetModel extends Model
{
    protected $table = 'aset_models';
    protected $guarded  = [];

    public function Printers(){
        return $this->hasMany('Printer');
    }
}
