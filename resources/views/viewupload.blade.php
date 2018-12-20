@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - Sistem Informasi</title>
</head>

@if(Auth::guest())
	<h4>Mohon Maaf</h4>
	<h1>Hanya Admin yang Dapat Melihat</h1>
	<h5>Jika Anda Admin, Silakan Log In untuk Membuka Halaman Ini</h5>
@else
	<h1>Upload</h1>
	<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
		        <tr>
                    <th>Nama</th>
                    <th>Instansi</th>
                    <th>No KTP</th>
                    <th>NO Telp</th>
                    <th>Path</th>
                    <th>URL</th>
                    <th>Created</th>
                </tr>
            </thead>
                <tbody>
        	        @foreach($files as $file)
                    <tr>
            	        <td>{{ $file->name }}</td>
                        <td>{{ $file->instansi }}</td>
                        <td>{{ $file->noktp }}</td>
                        <td>{{ $file->notlp }}</td>
                        <td>{{ $file->filename }}</td>
                        <td> <a href="{{ Storage::url($file->filename) }}"> View </a></td>
                        <td>{{ $file->created_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
@endif

@endsection