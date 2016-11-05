<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo e(route('eloquent.client.store')); ?>">
		<input type='hidden' name="_token" value="<?php echo e(csrf_token()); ?>">
		<label>Name:</label>
		<input type='text' name="name">
		<label>Address:</label>
		<input type='text' name="address">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>