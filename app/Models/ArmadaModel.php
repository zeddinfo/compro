<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArmadaModel extends Model
{
    protected $table = 'tb_mobil';

    public function kategori(){
        return $this->hasOne('App\Models\KategoriModel', 'id', 'id_kategori');
    }
}
