  
@extends('mestre')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através de formulario
@endsection
@section('conteudo')
	{{$nome}}<br>
	{{$morada}}<br>
	{{$automovel}}
@endsection