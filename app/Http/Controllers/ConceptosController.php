<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concepto;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ConceptosFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
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
    		$conceptos=Concepto::where('documento', 'LIKE', '%'.$query.'%')
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
        $conceptos->delete();
        return Redirect::to('bitacora/conceptos');
    }

    public function excel()
    {        
        Excel::create('Reporte Conceptos', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {
                //otra opción -> $products = Product::select('name')->get();
                $conceptos = Concepto::all();                
                $sheet->fromArray($conceptos);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }

        public function pdf()
    {        
        $conceptos = Concepto::all(); 
        $pdf = PDF::loadView('bitacora.conceptos.pdf', ['conceptos' => $conceptos]);
        return $pdf->download('conceptos.pdf');
    }
}
