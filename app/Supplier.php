<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'aset_stor_suppliers';
    //protected $guarded  = [];
    protected $fillable = ['name','address', 'email', 'phone'];

    public function Printers(){
        return $this->hasMany('Printer');
    }

    public function Toner(){
        return $this->hasMany('Toner');
    }
}
