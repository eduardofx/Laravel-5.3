<h1>Cliente</h1>
<hr />
<p> ID: <?php echo e($id); ?></p>
<p> Nome:  <?php echo e($nome); ?> </p>
<p> Conteúdo:  <?php echo e(isset($conteudo) ? $conteudo : 'Não tem conteúdo'); ?> </p>
<p> Link:  <?php echo "<a href='#'> Link</a> "; ?> </p>