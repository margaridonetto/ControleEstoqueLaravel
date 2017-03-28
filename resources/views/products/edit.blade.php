<!DOCTYPE html>
<html>
<head>
	<title>New Product</title>
</head>
<body>
	<h1> Novo Produto </h1>
	{{Form::open(['url' => 'products/'.$product->id, 'method' => 'put'])}}
		{{Form::label('name', 'Nome')}}
		{{Form::text('name', $product->name, ['placeholder' => 'Nome do Produto'])}}

		{{Form::label('description', 'Descrição')}}
		{{Form::text('description', $product->description, ['placeholder' => 'Descrição do Produto'])}}

		{{Form::label('price_cost', 'Preço Custo')}}
		{{Form::text('price_cost', $product->price_cost, ['placeholder' => 'Preço de Custo'])}}

		{{Form::label('price_resale', 'Preço Revenda')}}
		{{Form::text('price_resale', $product->price_resale, ['placeholder' => 'Preço de Revenda'])}}

		{{Form::submit('editar')}}

	{{Form::close()}}
</body>
</html>