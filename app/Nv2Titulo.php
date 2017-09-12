<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nv2Titulo extends Model
{
    protected $fillable = [
        'text',
        'title',
        'nv1_titulos_id'
    ];

    public function nv1()
    {
        return $this->belongsTo('App\Nv1Titulo', 'nv1_titulos_id');
    }
    
    public function nv3()
    {
        return $this->hasMany('App\Nv3Titulo', 'nv2_titulos_id');
    }

    public function nv4()
    {
        return $this->hasMany('App\Nv4Titulo', 'nv3_titulos_nv2_titulos_id');
    }
}