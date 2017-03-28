<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Novo Notebook </h1>
	{{Form::open(['url' => 'products/'.$product->id, 'method' => 'post'])}}
		{{Form::label('name', 'Nome')}}
		{{Form::text('name', null, ['placeholder' => 'Nome do Produto'])}}

		{{Form::label('description', 'Descrição')}}
		{{Form::text('description', null, ['placeholder' => 'Descrição do Produto'])}}

		{{Form::label('price_cost', 'PreçoCusto')}}
		{{Form::text('price_cost', null, ['placeholder' => 'Preço de Custo'])}}

		{{Form::label('price_resale', 'PreçoRevenda')}}
		{{Form::text('price_resale', null, ['placeholder' => 'Preço de Revenda'])}}

		{{Form::submit('salvar')}}

	{{Form::close()}}
</body>
</html>

