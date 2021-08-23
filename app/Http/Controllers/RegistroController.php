<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\usuario;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Route::view('Vregistro', 'viewName');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login = new Login;
        $Objusuario = new Usuario;
        $nombre = $request->input('nombre', 'default');
        $apellido = $request->input('apellido', 'default');
        $usuario = $request->input('usuario', 'default');
        $pass1 = $request->input('pass1', 'default');
        $pass2 = $request->input('pass2', 'default');

        $login->usuario = $usuario;
        $login->pass = $pass1; 
       
                 
        if ($pass1 == $pass2) {


            if ($login->save()) {
            
                $id = $login->id;   
                $Objusuario->nombre = $nombre;
                $Objusuario->apellido = $apellido;
                $Objusuario->id_login = $id;
    
                if ($Objusuario->save()) {
    
                    return redirect('/')->with('success','Usuario registrado correctamente');
                        
                    }
                }             
     
       }else{

            return back()->with('error','Las contraseñas no coinciden');


        }

     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
