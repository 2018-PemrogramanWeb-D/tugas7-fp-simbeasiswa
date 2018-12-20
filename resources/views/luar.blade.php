@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - Luar Negeri</title>
</head>

<h1 class="mt-4 mb-3">Sistem Informasi Beasiswa <small>Kategori</small></h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Luar Negeri</li>
</ol>
  
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
       	<div class="col-lg-6">
       		<h2 class="card-title">Beasiswa SISGP</h2>
       		<p class="card-text">SISGP adalah beasiswa yang ditujukan bagi pendaftar yang ingin melanjutkan studi S2 di Swedia.</p>
       		<a href="{{url('/sisgp')}}" class="btn btn-primary">Read More &rarr;</a>
       	</div>
     	</div>
    </div>
    <div class="card-footer text-muted">
     	{{-- Posted on {{$post->created_at}} by <a href="/contact">Admin</a> --}}
   	</div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="card-title">Beasiswa Clarendon</h2>
          <p class="card-text">Beasiswa Clarendon ditujukan bagi pendaftar yang ingin melanjutkan studi S2 dan S3 di Universitas Oxford.</p>
          <a href="{{url('/post/1')}}" class="btn btn-primary">Read More &rarr;</a>
        </div>
      </div>
    </div>
    <div class="card-footer text-muted">
      {{-- Posted on {{$post->created_at}} by <a href="/contact">Admin</a> --}}
    </div>
  </div>

@endsection