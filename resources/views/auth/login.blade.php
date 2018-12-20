@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - LogIn</title>
</head>

<div class="text-center row justify-content-center">        
    <form method="POST" action="{{url('login1')}}">
        {{csrf_field()}}
        <br><h2>Login</h2><br>      
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info btn-lg btn-block" name="login">
        </div>
    </form>
</div>

@endsection