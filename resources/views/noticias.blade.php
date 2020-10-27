@extends('mestre')
@section('titulo-pagina')
Noticias
@endsection
@section('header')
Noticias
@endsection
@section('conteudo')
Esta pagina é derivada a noticias do munfo atual e para isso desponiblizamos alguns links dos jornais mais requesitados pelos clientes
@foreach($sites as $chave=> $site)
<p><a href="{{$site}}">{{$chave}}</a></p>
@endforeach
@endsection
