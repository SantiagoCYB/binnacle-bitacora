<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Concepto;
use App\Informe;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InformesFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class InformesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index(Request $request)
	{
		if ($request)
		{
			$query=trim($request->get('searchText'));
			$informes=Informe::select('informes.id', 'personas.nombre', 'conceptos.codigo', 'informes.descripcion', 'created_at', 'updated_at')
				->join('personas', 'personas.id', '=', 'informes.persona_id')
				->join('conceptos', 'conceptos.id', '=', 'informes.concepto_id')
				->where('informes.descripcion', 'LIKE', '%'.$query.'%')
				->orwhere('conceptos.id', 'LIKE', '%'.$query.'%')
				->orwhere('personas.nombre', 'LIKE', '%'.$query.'%')
				->paginate(7);
			return view('bitacora.informes.index', ["informes"=>$informes,"searchText"=>$query]);
		}
	}

	public function create()
	{
		return view("bitacora.informes.create");
	}

	public function store(InformesFormRequest $request)
	{
	   
		$informe = new Informe([
			"persona_id"=>$request->get('persona_id'),
			"concepto_id"=>$request->get('concepto_id'),
			"descripcion"=>$request->get('descripcion')
		]);

		$informe->save();

		return Redirect::to('bitacora/informes');
	}

	public function show($id)
	{
		return view("bitacora.informes.show", ["informes"=>Informe::findOrFail($id)]);
		$informes = Informe::with('perso')->find($id);
		//return view('todo/show', compact('todo')); 
	}

	public function edit($id)
	{
		return view("bitacora.informes.edit", ["informes"=>Informe::findOrFail($id)]);
	}

	public function update(InformesFormRequest $request,$id)
	{
		$informes=Informe::findOrfail($id);
		$informes->descripcion=$request->get('descripcion');       
		$informes->update();
		return Redirect::to('bitacora/informes');
	}

	public function destroy($id)
	{
		$informes=Informe::findOrFail($id);
		$informes->delete();
		return Redirect::to('bitacora/informes');
	}

	public function excel()
	{        
		Excel::create('Reporte Informes', function($excel) {
			$excel->sheet('Excel sheet', function($sheet) {
				$informes = Informe::select('informes.id', 'personas.nombre', 'conceptos.codigo', 'informes.descripcion', 'created_at', 'updated_at')
				->join('personas', 'personas.id', '=', 'informes.persona_id')
				->join('conceptos', 'conceptos.id', '=', 'informes.concepto_id')
				->get();              
				$sheet->fromArray($informes);
				$sheet->setOrientation('landscape');
			});
		})->export('xls');
	}

	public function pdf(Request $request)
	{
		if($request->exists("id")) {
			$informes = Informe::where("informes.id",$request->id)
			->join('personas', 'personas.id', '=', 'informes.persona_id')
			->join('conceptos', 'conceptos.id', '=', 'informes.concepto_id')
			->get(['informes.id', 'personas.nombre', 'conceptos.codigo', 'informes.descripcion', 'created_at', 'updated_at']);
		}else{
			$informes = Informe::all();
		}

		if($informes->count() == 0){
			return response()->json(["success"=>false]);
		}

		$pdf = PDF::loadView('bitacora.informes.pdf', ['informes' => $informes]);
		return $pdf->download('informes.pdf');
	}
}
