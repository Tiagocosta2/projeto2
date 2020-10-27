@extends('mestre')
@section('titulo-pagina')
Onde Estamos
@endsection
@section('header')
Onde Estamos
@endsection
@section('conteudo')
Nesta pagina encontras um formulario onde prenches os campos que te são pedidos e no final submetes o formulario.
<form method="post" action="{{route('processar.form')}}">
		@csrf
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<label for="morada">morada</label>
	<input type="text" name="morada">	
	<label for="automovel">Automovel</label>
	<select name="automovel">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="mercedes">Mercedes</option>
		<option value="Audi">Audi</option>
	</select>	
	<button type="submit">enviar</button>
	</form>
@endsection