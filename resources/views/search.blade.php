@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - Search</title>
</head>

<h1 class="mt-4 mb-3">Sistem Informasi Beasiswa <small>Search</small></h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Kategori</li>
</ol>
@foreach($post as $post)
    <div class="card mb-4">
        <div class="card-body">
    	    <div class="row">
            	<div class="col-lg-6">
              		<h2 class="card-title"> {{$post->judul}}</h2>
              		<p class="card-text">{{$post->deskripsi}}</p>
              		<a href="{{url('/post/'.$post->id)}}" class="btn btn-primary">Read More &rarr;</a>
            	</div>
          	</div>
        </div>
    	<div class="card-footer text-muted">
    	Posted on {{$post->created_at}} by <a href="/contact">Admin</a>
    	</div>
    </div>
@endforeach

@endsection