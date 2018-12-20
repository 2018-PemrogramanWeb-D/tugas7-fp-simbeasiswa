@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - Upload</title>
</head>

<div class="text-center row justify-content-center">    	
    <form method="POST" enctype="multipart/form-data" action="{{url ('/upload1')}}">
	    {{csrf_field()}}
	    <br><h2>Upload File</h2><br> 
	    <div class="form-group">
	      	<input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama" required>
		</div>
		<div class="form-group">
	    	<input type="text" class="form-control form-control-lg" id="instansi" name="instansi" placeholder="Asal Instansi" required>
		</div>
		<div class="form-group">
	    	<input type="text" class="form-control form-control-lg" id="noktp" name="noktp" placeholder="Nomor KTP" required>
		</div>
		<div class="form-group">
	    	<input type="text" class="form-control form-control-lg" id="notlp" name="notlp" placeholder="Nomor Telepon" required>
		</div>
		<div class="form-group">
			<div class="custom-file">
	  			<input type="file" class="custom-file-input" id="uploadfile" name="uploadfile" required />
	  			<label class="custom-file-label" for="uploadfile">Pilih File</label>
   			</div>
   		</div>
		<div class="form-group">
	    	<input type="submit" class="btn btn-info btn-lg btn-block" value="Upload">
		</div>
	</form>   
</div>

@endsection