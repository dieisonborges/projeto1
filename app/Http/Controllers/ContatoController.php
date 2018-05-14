<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
    	$data['titulo'] = "Contato";
    	$data['email'] = "dieisoncomix@gmail.com";
    	return view('contato', $data);
    }
}
