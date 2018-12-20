@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - {{$bella->judul}}</title>
</head>

<h1 class="mt-4 mb-3">{{$bella->judul}}
        <small>by
          <a href="/contact">Admin</a>
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">{{$bella->judul}}</li>
      </ol>

      <div class="row">

        <div class="col-lg-8">

          {{-- <img class="img-fluid rounded blogimg2" src="images/example/ex1.jpg" alt=""> --}}

          <hr>

          <p>Posted on {{$bella->created_at}}</p>

          <hr>
          <p class="lead">{{$bella->deskripsi}}</p>

          <?php
          if (!empty($bella->fasilitas)) {
            echo "<p>Fasilitas :</p>";
            echo "<ul>";
              $data = $bella->fasilitas;
              $split = explode(';', $data);
              $isi = sizeof($split);
              for ($i = 0; $i < $isi; $i++)
                {
                  echo "<li>";
                  echo $split[$i];
                  echo "</li>";  
                }
            echo "</ul>";
          }

          if (!empty($bella->syarat)) {
            echo "<p>Syarat :</p>";
            echo "<ul>";
              $data = $bella->syarat;
              $split = explode(';', $data);
              $isi = sizeof($split);
              for ($i = 0; $i < $isi; $i++)
                {
                  echo "<li>";
                  echo $split[$i];
                  echo "</li>";  
                }
            echo "</ul>";
          }

          if (!empty($bella->administrasi)) {
            echo "<p>Syarat Administratif :</p>";
            echo "<ul>";
              $data = $bella->administrasi;
              $split = explode(';', $data);
              $isi = sizeof($split);
              for ($i = 0; $i < $isi; $i++)
                {
                  echo "<li>";
                  echo $split[$i];
                  echo "</li>";  
                }
            echo "</ul>";
          }

          if (!empty($bella->tes)) {
            echo "<p>Syarat Tes Tulis dan Wawancara :</p>";
            echo "<ul>";
              $data = $bella->tes;
              $split = explode(';', $data);
              $isi = sizeof($split);
              for ($i = 0; $i < $isi; $i++)
                {
                  echo "<li>";
                  echo $split[$i];
                  echo "</li>";  
                }
            echo "</ul>";
          }
          
          if (!empty($bella->alur)) {
            echo "<p>Alur Pendaftaran :</p>";
            echo "<ul>";
              $data = $bella->alur;
              $split = explode(';', $data);
              $isi = sizeof($split);
              for ($i = 0; $i < $isi; $i++)
                {
                  echo "<li>";
                  echo $split[$i];
                  echo "</li>";  
                }
            echo "</ul>";
          }

          if (!empty($bella->pembukaan)) {
            echo "<p>Pembukaan :</p>";
            echo "<p>"; echo $bella->pembukaan; echo "</p>";
          }

          
            echo "<p>Info lebih lanjut </p>";
            if (!empty($bella->facebook)) {
              echo "Facebook : "; echo $bella->facebook; echo "<br>";
            }
            if (!empty($bella->twitter)) {
              echo "Twitter : "; echo $bella->twitter; echo "<br>";        
            }
            if (!empty($bella->instagram)) {
              echo "Instagram : "; echo $bella->instagram; echo "<br>";        
            }
            if (!empty($bella->website)) {
              echo "Website : "; echo $bella->website; echo "<br>";        
            }

          ?>
          <hr>

          
          </div>

          <div class="col-md-4">

          <div class="card mb-4">
            <h5 class="card-header">Cari</h5>
            <div class="card-body">
              <div class="input-group">
                <form class="form-inline" action="{{url('/search')}}" method="POST">
                  {{csrf_field()}}
                  <input class="form-control mr-sm-2" type="text" placeholder="Cari Beasiswa" name="kata">
                  <button class="btn btn-success" type="submit">GO</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <hr>
@endsection