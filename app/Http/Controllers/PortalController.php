<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
	public $sites= [
		'Jornal de Noticias'=>'https://www.jn.pt/',
		'Record'=>'https://www.record.pt/',
		'A Bola'=>'https://www.abola.pt/',
		'O jogo'=>'https://www.ojogo.pt/'

	];

     public function index ()
    {
    	return view('index');
    }
    public function noticias() 
    {
    	return view('noticias',['sites'=>$this->sites]);
    }
     public function empresa() 
    {
    	return view('empresa');
    }
    public function ondeestamos()
    {
    	return view('ondeestamos');
    }
    public function contactos()
    {
    	return view('contactos');
    }




    public function mostrarForm() {
        return view('ondeestamos');
    }
    public function processarForm (Request $request) {
        $nome = $request->nome;
        $morada = $request->morada;
        $automovel = $request ->automovel;

        return view('form-enviado',[   
            'nome' =>$nome,
            'morada'=>$morada,
            'automovel'=>$automovel
        ]);
    }
}