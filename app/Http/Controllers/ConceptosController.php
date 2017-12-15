<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concepto;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ConceptosFormRequest;
use DB;

class ConceptosController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$conceptos=DB::table('conceptos')
            ->where('estado','=','1')
            ->where('documento', 'LIKE', '%'.$query.'%')
            //->orderBy('id','desc')
    		->paginate(10);
    		return view('bitacora.conceptos.index', ["conceptos"=>$conceptos,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("bitacora.conceptos.create");
    }

    public function store(ConceptosFormRequest $request)
    {
    	$conceptos=new Concepto;
        $conceptos->documento=$request->get('documento');
    	$conceptos->nombre=$request->get('nombre');
    	$conceptos->codigo=$request->get('codigo');
    	$conceptos->detalle=$request->get('detalle');
        $conceptos->descripcion=$request->get('descripcion');
        $conceptos->estado='1';
    	$conceptos->save();
    	return Redirect::to('bitacora/conceptos');
    }

    public function show($id)
    {
    	return view("bitacora.conceptos.show", ["conceptos"=>Concepto::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("bitacora.conceptos.edit", ["conceptos"=>Concepto::findOrFail($id)]);
    }

    public function update(ConceptosFormRequest $request,$id)
    {
    	$conceptos=Concepto::findOrfail($id);
    	$conceptos->nombre=$request->get('nombre');
    	$conceptos->codigo=$request->get('codigo');
    	$conceptos->detalle=$request->get('detalle');
    	$conceptos->descripcion=$request->get('descripcion');       
    	$conceptos->update();
    	return Redirect::to('bitacora/conceptos');
    }

    public function destroy($id)
    {
    	$conceptos=Concepto::findOrFail($id);
        $conceptos->estado='0';
        $conceptos->update();
        return Redirect::to('bitacora/conceptos');
    }
}
