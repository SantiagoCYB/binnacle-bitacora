<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
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
    		$usuarios=User::where('name', 'LIKE', '%'.$query.'%')
    		->paginate(10);
    		return view('bitacora.usuarios.index', ["usuarios"=>$usuarios,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("bitacora.usuarios.create");
    }

    public function store(UsuarioFormRequest $request)
    {
    	$usuarios=new Persona;
        $usuarios->name=$request->get('name');
    	$usuarios->email=$request->get('email');
    	$usuarios->password=bcrypt($request->get('password'));
    	$usuarios->save();
    	return Redirect::to('bitacora/usuarios');
    }

    public function edit($id)
    {
    	return view("bitacora.usuarios.edit", ["usuarios"=>User::findOrFail($id)]);
    }

    public function show($id)
    {
        return view("bitacora.usuarios.show", ["usuarios"=>User::findOrFail($id)]);
    }

    public function update(UsuarioFormRequest $request,$id)
    {
    	$usuarios=User::findOrfail($id);
    	$usuarios->name=$request->get('name');
    	$usuarios->email=$request->get('email');
    	$usuarios->password=bcrypt($request->get('password'));     
    	$usuarios->update();
    	return Redirect::to('bitacora/usuarios');
    }

    public function destroy($id)
    {
    	$usuarios=User::findOrFail($id);
        $personas->delete();
        return Redirect::to('bitacora/usuarios');
    }

}
