<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BdoOportunidade extends Model
{
    use SoftDeletes;
	protected $primaryKey = 'idoportunidade';
    protected $table = 'bdo_oportunidades';

    public function empresa()
    {
    	return $this->belongsTo('App\BdoEmpresa', 'idempresa');
    }
}