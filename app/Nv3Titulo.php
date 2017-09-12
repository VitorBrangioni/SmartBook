<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nv3Titulo extends Model
{
    protected $fillable = [
        'text',
        'title',
        'nv2_titulos_id',
        'nv2_titulos_nv1_titulos_id'
    ];

    public function nv1()
    {
        return $this->belongsTo('App\Nv1Titulo', 'nv2_titulos_nv1_titulos_id');
    }

    public function nv2()
    {
        return $this->belongsTo('App\Nv2Titulo', 'nv2_titulos_id');
    }

    public function nv4()
    {
        return $this->hasMany('App\Nv4Titulo', 'nv3_titulos_id');
    }

}
