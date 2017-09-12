<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nv1Titulo extends Model
{
    protected $fillable = [
        'text',
        'title'
    ];

    public function nv2()
    {
        return $this->hasMany('App\Nv2Titulo', 'nv1_titulos_id');
    }

    public function nv3()
    {
        return $this->hasMany('App\Nv3Titulo', 'nv2_titulos_nv1_titulos_id');
    }

    public function nv4()
    {
        return $this->hasMany('App\Nv4Titulo', 'nv3_titulos_nv2_titulos_nv1_titulos_id');
    }
}
