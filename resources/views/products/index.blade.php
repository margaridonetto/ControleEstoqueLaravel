<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Estoque</title>
</head>
<body>
	<h1>Controle de Estoque</h1>

	@foreach($products as $produto)
		<h1>Nome:{{$produto->name}}</h1>

		<p>Descrição:{{$produto->description}}</p>
		<p>Preço de Custo:{{$produto->price_cost}}</p>
		<p>Preço de Venda:{{$produto->price_resale}}</p>
		<a href="{{ url('products/'.$produto->id.'/edit')}}">Editar</a>
		{{Form::open(['url' => 'products/' . $produto->id, 'method' => 'DELETE'])}}
			{{Form::submit('Deletar')}}
		{{Form::close()}}
		<hr>
	@endforeach

</body>
</html>