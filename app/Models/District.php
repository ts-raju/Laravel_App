<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    function province(){
        return $this->belongsTo(Province::class, 'province_id');
        // return $this->hasMany('App\Models\Province');
    }

}
