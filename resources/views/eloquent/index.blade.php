<h1>Listagem de Clientes</h1>
<hr />
<a href="{{ route('eloquent.client.create') }}">Cadastrar</a>
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
	
		@foreach($clients as $client)
		<tr>
			<td>{{ $client->id }}</td>
			<td>{{ $client->name }}</td>
			<td>{{ $client->address }}</td>
		<tr>
		@endforeach
	
	</tbody>
</table>