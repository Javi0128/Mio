<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlaForm extends Controller
{


    public function index(){

        return view('home');

    }

    public function form(){

        return view('auth.form');

    }

    public function compruebaForm( Request $request ){


        $rules = [

            'nombre' => 'required | min: 3',
            'apellidos' => 'required | min: 3',
            'fechaNacimiento' => 'required | date | before: -18 years',
            'sexo' => 'required',
            'email' => 'required',
            'contrasena' => 'required | different: nombre | min: 8',
            'checkbox' => 'required'

        ];


        $messages = [

            'required' => '* campo obligatorio',
            'different' => '* :attribute no puede contener el nombre'

        ];


        $this->validate($request, $rules, $messages);

        return view('/muestraDatos' , [ 'datos' => $request->all() ]);

    }

}
