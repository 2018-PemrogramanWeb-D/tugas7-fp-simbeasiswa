@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - Message</title>
</head>

<h1>Message from User</h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<th>Id</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Message</th>
			<th>Time</th>
		</thead>
		<tbody>
			@foreach($msg as $x)
				<tr>
					<td>{{$x->id}}</td>
					<td>{{$x->name}}</td>
					<td>{{$x->email}}</td>
					<td>{{$x->phone}}</td>
					<td>{{$x->message}}</td>
					<td>{{$x->created_at}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection