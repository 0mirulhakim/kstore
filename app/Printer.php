<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table = 'aset_printers';
    protected $guarded  = [];

   /* public function getreceive_dateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function setreceive_dateAttribute($value)
    {
        $this->attributes['receive_date'] = Carbon::createFromFormat('Y-m-d', $value)->toDateString();
    }

    public function getallocate_dateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function setallocate_dateAttribute($value)
    {
        $this->attributes['allocate_date'] = Carbon::createFromFormat('Y-m-d', $value)->toDateString();
    }*/

    public function Brands(){
        return $this->belongsTo('App\Brand', 'aset_brand_id');
    }

    public  function Models(){
        return $this->belongsTo('App\AsetModel', 'aset_model_id');
    }

    public  function Suppliers(){
        return $this->belongsTo('App\Supplier', 'aset_stor_supplier_id');
    }

    public  function Procurement_types(){
        return $this->belongsTo('App\Procurement_type', 'aset_procurement_ty_id');
    }

    public  function AsetStatus(){
        return $this->belongsTo('App\AsetStatus', 'aset_status_id');
    }

    public  function Staffs(){
        return $this->belongsTo('App\Staff', 'hr_staff_id');
    }
}
