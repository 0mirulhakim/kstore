<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsetModel extends Model
{
    protected $table = 'aset_models';
    protected $guarded  = [];

    public function Printer(){
        return $this->hasMany('App\Printer');
    }

    public function Brand(){
        return $this->belongsTo('App\Brand', 'aset_brand_id');
    }
}
