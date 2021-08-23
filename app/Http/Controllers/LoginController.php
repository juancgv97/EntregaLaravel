<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return Route::view('home', 'login.blade');
        
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

        $usuario = $request->input('usuario', 'default');
        $pass = $request->input('pass', 'default');
        $Objlogin = new Login;
        $id_login = 0;

        /*$Objlogin = \DB::table('logins')->select('id')->where('usuario',$usuario)
        ->where('contraseña',$pass)->get();*/
        $Objlogin = \DB::table('logins')->select()->where('usuario',$usuario)->get();

        foreach ($Objlogin as $data) {
            $pass1=$data->pass;
            $id_login = $data->id;
            
        }

        if (password_verify($pass, $pass1) == true) {

            $Objusuario = \DB::table('usuarios')->select()->where('id_login',$id_login)->get();
            
            foreach ($Objusuario as $data) {
                $idusuario = $data->id_usuario;
                
            }
           
            return redirect('inicio');


        }else{

            return back()->with('error','Usuario incorrecto');

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
