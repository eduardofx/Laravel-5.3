<?php
	$num = 50;
	$array = [1,2,3,4,5];
?>

@if($num < 20)
  	<p> numero menor que 20 </p>
  @else
	<p> numero maior que 20 </p>
@endif



@for($i=0; $i<=20; $i++) 
  <p>  Valor: {{ $i }} </p>
@endfor


@foreach($array as $value)
	<p>Foreach {{$value}}</p>
@endforeach