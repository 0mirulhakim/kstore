<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toner extends Model
{
    protected $table = 'stor_toners';
    protected $guarded  = [];

    public function asetModel(){
        return $this->belongsTo('App\AsetModel', 'aset_model_id');
    }
}
