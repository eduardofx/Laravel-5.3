<?php
	$num = 50;
	$array = [1,2,3,4,5];
?>

<?php if($num < 20): ?>
  	<p> numero menor que 20 </p>
  <?php else: ?>
	<p> numero maior que 20 </p>
<?php endif; ?>



<?php for($i=0; $i<=20; $i++): ?> 
  <p>  Valor: <?php echo e($i); ?> </p>
<?php endfor; ?>


<?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<p>Foreach <?php echo e($value); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>