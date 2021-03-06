@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - Alumni ITS</title>
</head>

<h1 class="mt-4 mb-3">Sistem Informasi Beasiswa <small>Kategori</small></h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Alumni ITS</li>
</ol>
  
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
       	<div class="col-lg-6">
       		<h2 class="card-title">Beasiswa Tunas Unggul Bangsa</h2>
       		<p class="card-text">Program beasiswa yang diberikan kepada mahasiswa yang telah terdaftar sebagai mahasiswa ITS, PENS, atau PPNS yang bertujuan agar mahasiswa berprestasi yang tidak mampu secara ekonomi dapat meneruskan belajarnya hingga wisuda tanpa ada kendala karena kekurangan biaya.</p>
       		<a href="{{url('/ytub')}}" class="btn btn-primary">Read More &rarr;</a>
       	</div>
     	</div>
    </div>
    <div class="card-footer text-muted">
     	{{-- Posted on {{$post->created_at}} by <a href="/contact">Admin</a> --}}
   	</div>
  </div>

@endsection