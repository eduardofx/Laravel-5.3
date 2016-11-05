<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1> Admin Client</h1>
	<hr />
	<form method="post" action="{{route('admin.client.store')}}">
		<input type='hidden' name="_token" value="{{ csrf_token() }}">
		<input type='text' name="value">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>