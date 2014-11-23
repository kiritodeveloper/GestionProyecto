<?php

class Cargo extends Eloquent
{
    protected $table      = 'cargos';
    protected $fillable   = array('nombre','descripcion');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function gerente() {
		return $this->hasMany('Gerente'); // this matches the Eloquent model
	}

	public static function getListCargos(){
		$cargos = DB::table('cargos')->select('id', 'nombre')->orderBy('nombre')->get();
		$lstCargos = array();
		
		foreach ($cargos as $cargo)
		{
		     $lstCargos[$cargo->id] = $cargo->nombre;
		}

		return $lstCargos;
	}
}