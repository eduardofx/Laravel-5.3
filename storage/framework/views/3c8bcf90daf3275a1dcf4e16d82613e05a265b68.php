<h1>Listagem de Clientes</h1>
<hr />
<a href="<?php echo e(route('eloquent.client.create')); ?>">Cadastrar</a>
<br /><br />
<table border="1">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>	
	
		<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($client->id); ?></td>
			<td><?php echo e($client->name); ?></td>
			<td><?php echo e($client->address); ?></td>
		<tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	
	</tbody>
</table>