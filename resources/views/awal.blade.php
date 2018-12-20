@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - HomePage</title>
</head>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('{{asset('assetcss/images/logo-beasiswa-plus.png')}}')">
            <div class="carousel-caption d-none d-md-block" style="color: black">
              <h3>Djarum Beasiswa Plus</h3>
              <p>Informasi singkat mengenai Djarum Beasiswa Plus</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('{{asset('assetcss/images/ika-its.jpg')}}')">
            <div class="carousel-caption d-none d-md-block" style="color: black">
              <h3>Beasiswa Tunas Unggul Bangsa</h3>
              <p>Informasi singkat mengenai Beasiswa Tunas Unggul Bangsa</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('{{asset('assetcss/images/sisgp.png')}}')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Beasiswa SISGP</h3>
              <p>Informasi singkat mengenai Beasiswa SISGP</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <h1 class="my-4">Welcome to Sistem Informasi Beasiswa ITS</h1>
        <div class="row">
            <div class="col-sm-8">
                <br>
                <p>Sistem Informasi Beasiswa ITS (SIM Beasiswa ITS) dibuat dengan tujuan untuk memudahkan mahasiswa ITS mendapatkan informasi beasiswa baik dari dalam maupun luar negeri.</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="{{url('/contact')}}">Abot Us &raquo;</a>
                </p>
            </div>
            <div class="card mb-4" style="margin: 20px">
                <h5 class="card-header">Cari</h5>
                <div class="card-body">
                    <div class="input-group">
                       <form class="form-inline" action="{{url('/search')}}" method="POST">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="text" placeholder="Cari Beasiswa" name="kata">
                            <button class="btn btn-success" type="submit">GO</button>
                        </form>
                        <br>
                    </div>
                    <div class="col-lg-36" style="margin: 20px">
                        {{-- <h6> <br> Kategori</h6>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Oktober-Desember</a> <span class="badge">12</span></li>
                            <li class="list-group-item"><a href="#">Januari-Maret</a> <span class="badge">5</span></li> 
                            <li class="list-group-item"><a href="#">Januari-Maret</a> <span class="badge">3</span></li> 
                            <li class="list-group-item"><a href="#">Juli-September</a> <span class="badge">3</span></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{asset('assetcss/images/Clarendon.jpg')}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url('/post/1')}}">Beasiswa Clarendon</a>
                        </h4>
                        <p class="card-text">Beasiswa Clarendon ditujukan bagi pendaftar yang ingin melanjutkan studi S2 dan S3 di Universitas Oxford.</p>
                       {{-- <h6>Deadline :</h6> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{asset('assetcss/images/logo-beasiswa-plus.png')}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url('/post/3')}}">Beasiswa Djarum Beasiswa Plus</a>
                        </h4>
                        <p class="card-text">Program Djarum Beasiswa Plus ditujukan bagi mahasiswa yang tengah menempuh program studi Strata 1/ Diploma 4 di perguruan tinggi negeri maupun swasta yang memiliki kerja sama (bermitra) dengan Djarum Foundation.</p>
                            {{-- <h6>Deadline :</h6> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{asset('assetcss/images/sisgp.png')}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url('/sisgp')}}">Beasiswa SISGP</a>
                        </h4>
                        <p class="card-text">SISGP adalah beasiswa yang ditujukan bagi pendaftar yang ingin melanjutkan studi S2 di Swedia.</p>
                        {{-- <h6>Deadline :</h6> --}}
                    </div>
                </div>
            </div>
            {{-- <ul class="pagination" style="margin:20px 440px" >
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul> --}}
            <hr>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
                <form method="POST" action="{{url('message')}}" id="contactForm" novalidate>
                    {{csrf_field()}}
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
                </form>
            </div>
            <div class="card mb-4">
                <h5 class="card-header">Kategori</h5>
                <div class="card-body">
                    <div class="col mb-4" style="margin-right:  100px">
                        <ul class="list-group" style="text-align: center;">
                            <li class="list-group-item"><a href="#">Alumni ITS</a></li>
                            <li class="list-group-item"><a href="#">Institusi</a> </li> 
                            <li class="list-group-item"><a href="#">Non Institusi</a> </li> 
                            <li class="list-group-item"><a href="#">Pasca Sarjana</a> </li>
                            <li class="list-group-item"><a href="#">Luar Negeri</a> </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
@endsection