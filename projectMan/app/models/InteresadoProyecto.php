<?php

class InteresadoProyecto extends Eloquent
{
    protected $table      = 'interesados_proyectos';
    protected $fillable   = array('proyecto_id','interesado_id');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListInteresados($id)
	{
		$sql = 'select pp.id as idkey, p.id, pt.nombre, pp.interesadoid
				from interesados_proyectos pp
				inner join proyectos p on p.id = pp.proyectoid
				inner join interesados pt on pt.id = pp.interesadoid
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}

	public static function getInteresadosProyecto($id)
	{
		$sql = 'select pat.id, pat.nombre as patrocinador, car.nombre as cargo, dep.nombre as departamento,
				rej.nombre as rama_ejecutiva
				from interesados pat
				inner join cargos car on car.id = pat.cargoid
				inner join departamentos dep on dep.id = pat.departamentoid
				inner join ramas_ejecutivas rej on rej.id = pat.rama_ejecutivaid
				inner join patrocinadores_proyectos pp on pp.patrocinadorid = pat.id
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}
}