<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table = 'aset_printers';
    protected $guarded  = [];

    public function Brands(){
        return $this->belongsTo('App\Brand');
    }

    public  function Models(){
        return $this->belongsTo('App\AsetModel');
    }

    public  function Suppliers(){
        return $this->belongsTo('App\Supplier');
    }

    public  function Procurement_types(){
        return $this->belongsTo('App\Procurement_type');
    }

    public  function AsetStatus(){
        return $this->belongsTo('App\AsetStatus');
    }

    public  function Staff(){
        return $this->belongsTo('App\Staff');
    }
}
