<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "district";
    //Xa
    public function Ward()
    {
        return $this->hasMany("App\Models\Ward", "maqh", "xaid");
    }

    //Tinh
    public function Province()
    {
        return $this->belongsTo("App\Models\Province", "matp");
    }
}
