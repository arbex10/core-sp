<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perfil extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'idperfil';
    protected $table = 'perfis';

    public function user()
    {
        return $this->hasMany('App\User', 'idusuario');
    }
}
