<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuarioModel;

class UsuarioController extends Controller
{
    public function read(Request $request){
        $usuarios=UsuarioModel::all;
        return view('welcome', ['usuario'=> $usuarios]);
    }
}
