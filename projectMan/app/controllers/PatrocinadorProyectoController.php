<?php

class PatrocinadorProyectoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{		
		$patrocinadores = Patrocinador::getListCmb($id);		
        $proyecto = Proyecto::find($id);
		$this->layout->title = 'Nuevo Patrocinador';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'patrocinadoresproyectos.create',
			array(
				'proyecto' => $proyecto,				
				'patrocinadores' => $patrocinadores				
			)
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	
	public function store()
	{
		$proyectoid = Input::get('proyectoid');
		$patrocinadorid = Input::get('patrocinadorid');
		$proyecto = new PatrocinadorProyecto();
		$proyecto->proyectoid = $proyectoid;
		$proyecto->patrocinadorid = $patrocinadorid;
		$proyecto->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$patrocinadorP = PatrocinadorProyecto::find($id);
		$proyectoid = $patrocinadorP->proyectoid;
		$patrocinadorP->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	


}
