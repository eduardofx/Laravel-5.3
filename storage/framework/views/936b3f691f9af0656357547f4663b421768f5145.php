<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1> Site Client</h1>
	<hr />
	<form method="post" action="<?php echo e(route('site.client.store')); ?>">
		<input type='hidden' name="_token" value="<?php echo e(csrf_token()); ?>">
		<input type='text' name="value">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>