<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(request $request){
        return view('formBootstrap');
    }

    public function guardar(request $request){
        $request->validate([
            'nombre' => 'required',
            'email' => 'required | email',
            'edad' => 'required | numeric',
            'telefono' => 'required | numeric'
        ],
        [
            'nombre.required' => 'El campo NO puede estar vacío',
            'email.required' => 'El campo debe ser un email valido',
            'edad.required' => 'El campo debe contener una edad valida',
            'telefono.required' => 'El campo NO puede contener letras'
        ]

    );

        $form = new Form;
        $form -> nombre =$request -> nombre;
        $form -> email =$request -> email;
        $form -> edad =$request ->edad;
        $form -> telefono =$request -> telefono;

        $form -> save();
        return back()->with('success', 'Se registraron sus datos - Lo contactaremos!!');
    }
}
