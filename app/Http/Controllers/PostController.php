<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fruta;
use DB;

class PostController extends Controller{

    public function formSubmit(Request $request){

        DB::table('tabla_frutas')->insert([
            'nombreFruta' => $request->nombreFruta,
            'precioFruta' => $request->precioFruta
        ]);
        
    	return back()->with('success','Datos ingresados exitosamente');

    }

    public function mostrarFrutas(){

        $frutas = DB::table('tabla_frutas')->get();
        return response()->json($frutas);
    }

    public function editarFruta($id){

        $nombreFruta = DB::select('select nombreFruta from tabla_frutas where id = :id', ['id' => $id]);
        $nombreFruta = $nombreFruta[0]->nombreFruta;
        return view('editarFruta',compact('nombreFruta'));
    }

    public function actualizarDato(Request $request){

        $nombreFruta = $request->nombreFruta;
        $precioFruta = $request->precioFruta;

        DB::table('tabla_frutas')->where('nombreFruta', $nombreFruta)->update(['precioFruta' => $precioFruta]);
        
    	return back()->with('success','Datos ingresados exitosamente');

    }

    public function eliminarFruta($id){

        DB::table('tabla_frutas')->where('id', '=', $id)->delete();
        return view('listaFrutas');
    }

    public function volver(){
        
        return view('listaFrutas');
    }
}
