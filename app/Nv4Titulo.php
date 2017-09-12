<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nv4Titulo extends Model
{
    protected $fillable = [
        'text',
        'title',
        'nv3_titulos_id',
        'nv3_titulos_nv2_titulos_id',
        'nv3_titulos_nv2_titulos_nv1_titulos_id'
    ];

    public function nv1()
    {
        return $this->belongsTo('App\Nv1Titulo', 'nv3_titulos_nv2_titulos_nv1_titulos_id');
    }

    public function nv2()
    {
        return $this->belongsTo('App\Nv2Titulo', 'nv3_titulos_nv2_titulos_id');
    }

    public function nv3()
    {
        return $this->belongsTo('App\Nv3Titulo', 'nv3_titulos_id');
    }
}
