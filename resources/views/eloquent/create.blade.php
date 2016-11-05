<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="{{ route('eloquent.client.store') }}">
		<input type='hidden' name="_token" value="{{ csrf_token() }}">
		<label>Name:</label>
		<input type='text' name="name">
		<label>Address:</label>
		<input type='text' name="address">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>