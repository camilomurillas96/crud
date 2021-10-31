<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class crud extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function create(){
        return view('crear');
    }

    public function store(request $request){
        $productos = new producto();
        $productos->name = $request->name;
        $productos->tipo = $request->tipo;
        $productos->descripcion = $request->descripcion;
        $productos->save();
        
    }

    public function mostrar()
    {
        $productos = producto::paginate();
        return view('mostrar', compact('productos'));
    }

    public function unico($id){
        $productos = producto::find($id);
        return view('acciones', compact('productos'));
    }
}
