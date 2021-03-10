<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'dName',
        'dNameNepali',
    ];

    function province(){
        /* return $this->belongsTo(Province::class, "pno"); */
        return $this->belongsTo('App\Models\Province', 'pno');
        // return $this->hasMany('App\Models\Province');
    }
}
