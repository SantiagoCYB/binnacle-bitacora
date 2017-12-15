<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PersonasFormRequest;
use DB;

class PersonasController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$personas=DB::table('personas')
            ->where('condicion','=','1')
            ->where('documento', 'LIKE', '%'.$query.'%')
            //->orderBy('id','desc')
    		->paginate(10);
    		return view('bitacora.personas.index', ["personas"=>$personas,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("bitacora.personas.create");
    }

    public function store(PersonasFormRequest $request)
    {
    	$personas=new Persona;
        $personas->documento=$request->get('documento');
    	$personas->apellidos=$request->get('apellidos');
    	$personas->nombre=$request->get('nombre');
    	$personas->direccion=$request->get('direccion');
    	$personas->genero=$request->get('genero');
        $personas->condicion='1';
    	$personas->save();
    	return Redirect::to('bitacora/personas');
    }

    public function show($id)
    {
    	return view("bitacora.personas.show", ["personas"=>Persona::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("bitacora.personas.edit", ["personas"=>Persona::findOrFail($id)]);
    }

    public function update(PersonasFormRequest $request,$id)
    {
    	$personas=Persona::findOrfail($id);
    	$personas->apellidos=$request->get('apellidos');
    	$personas->nombre=$request->get('nombre');
    	$personas->direccion=$request->get('direccion');       
    	$personas->update();
    	return Redirect::to('bitacora/personas');
    }

    public function destroy($id)
    {
    	$personas=Persona::findOrFail($id);
        $personas->condicion='0';
        $personas->update();
        return Redirect::to('bitacora/personas');
    }
    
}
