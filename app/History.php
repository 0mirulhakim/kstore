<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'aset_printer_allocate_histories';
    protected $guarded  = [];

    
    public  function Printers(){
        return $this->belongsTo('App\Printer', 'aset_printer_id');
    }
    public  function Staffs(){
        return $this->belongsTo('App\Staff', 'hr_staff_id');
    }
}
