<?php

namespace App\Controllers;
use App\Models\mUsuarios;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function registro()
    {
        return view('vRegistro');
    }
    public function insertarForm()
    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo=[
            "email"=>$_POST['email'], 
            "password"=> $_POST['password'],
            "nombre"=> $_POST['nombre'],
            

        ];
            $mUsuarios->insert($usuarioNuevo);
            $datoId['idRegistrado']= $mUsuarios-> db->insertID();

            return view("vSuccess", $datoId);
    }
}
