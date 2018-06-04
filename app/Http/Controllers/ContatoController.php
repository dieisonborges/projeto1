<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index(){
    	$data['titulo'] = "Contato";
    	$data['email'] = "dieisoncomix@gmail.com";
    	return view('contato', $data);
    }

    public function enviar(Request $request){
    	
    	$dadosEmail = array(
    		'nome' => $request->input('nome'),
    		'email' => $request->input('email'),
    		'assunto' => $request->input('assunto'),
    		'msg' => $request->input('msg'),
    	);


    	Mail::send('email.contato',$dadosEmail,function($message){
    		$message->from('dieisondsb@fab.mil.br', 'Formulário de Contato');
    		$message->subject('Mensagem enviada pelo formulário de contato');
    		$message->to('dieisoncomix@gmail.com');
    	});

    	return redirect('contato')->with('success', 'Mensagem enviada, em breve entraremos em contato!');
    }
}
