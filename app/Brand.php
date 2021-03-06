<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'aset_brands';
    protected $guarded  = [];

    public function Printers(){
        return $this->hasMany('App\Printer');
    }

    public function AsetModel(){
        return $this->belongsTo('App\AsetModel');
    }
}
