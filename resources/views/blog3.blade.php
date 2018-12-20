@extends('layouts.app2')
@section('content')

<head>
    <title>SIM Beasiswa - SISGP</title>
</head>

<h1 class="mt-4 mb-3">Beasiswa SISGP
        <small>by
          Admin
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Beasiswa Institusi,Pasca Sarjana,Luar Negeri</li>
      </ol>

      <div class="row">

        <div class="col-lg-8">

          <img class="img-fluid rounded blogimg2" src="{{asset('assetcss/images/sisgp.png')}}" alt="">

          <hr>

          <p>Posted on January 1, 2018 at 12:00 PM</p>

          <hr>
          <p class="lead">SISGP adalah beasiswa yang ditujukan bagi pendaftar yang ingin melanjutkan studi S2 di Swedia.</p>

          <p>Peninjauan luas :</p>
          <ul>
            <li>Lakukan pendaftaran program S2 di https://www.universityadmissions.se/intl/start , antara 16 Oktober 2018 – 15 Januari 2019.</li>
            <li>Mendaftar SI scholarship antara 4-14 Februari 2019.</li>
            <p>Beasiswa yang didapat :</p>
            <ul>
              <li>Pelunasan biaya studi.</li>
              <li>Dana untuk biaya hidup sebesar SEK 10,000/bulan.</li>
              <li>Dana untuk biaya transportasi sebesar SEK 15,000 bagi pendaftar yang tidak tinggal di Swedia.</li>
              <li><a href="https://www.kammarkollegiet.se/sites/default/files/Insurance%20for%20Foreign%20Visitors%2C%20Terms%20and%20Conditions%202018.pdf">Asuransi kesehatan dan kecelakaan.</a>
              </li>
              <li><a href="https://si.se/en/how-we-work/build-relations-and-networks/nfgl/">Keanggotaan SI Network for Future Global Leaders.
              </a>
              </li>
              <li><a href="https://si.se/en/si-alumni-network/">Keanggotaan SI Alumni network</a> setelah studi selesai.</li>
            </ul>
          </ul>
          <p>Beasiswa tidak menyertakan :</p>
          <ul>
            <li>Biaya untuk anggota keluarga.</li>
            <li>Biaya pendaftaran.</li>
          </ul>
          <p>Periode beasiswa :</p>
          <ul>
            <li>Beasiswa ditujukan untuk program S2 satu tahun atau dua tahun, dan hanya diberikan untuk program studi yang dimulai di semester musim gugur.</li>
          </ul>
          <p>Kriteria pendaftaran :</p>
          <ul>
            <li>Pengalaman kerja minimal 3.000 jam.</li>
            <li>Pendaftar harus bertanggung jawab dalam membayar biaya studi, telah mengikuti langkah pendaftaran, dan diterima di program studi yang memenuhi syarat beasiswa pada 4 April 2019.</li>
            <li>Pengalaman kepemimpinan dari pekerjaan yang sudah atau sedang dijalani.</li>
            <li>Kewarganegaraan pendaftar harus memenuhi syarat beasiswa.</li>
            <li>Kriteria yang lebih lengkap bisa dilihat di :<a href="https://si.se/en/apply/sisgp-who-can-apply/">https://si.se/en/apply/sisgp-who-can-apply/</a></li>
          </ul>
          <p>Prioritas :</p>
          <ul>
            <li>Prioritas akan diberikan kepada pelamar dengan latar belakang profesional yang kuat dan relevan dan menunjukkan pengalaman kepemimpinan.</li>
          </ul>
          <p>Dokumen yang diperlukan :</p>
          <ul>
            <li>Motivation letter sesuai template SISGP.</li>
            <li>Curriculum Vitae (CV) sesuai template SISGP.</li>
            <li>Bukti pengalaman kerja dan  kepemimpinan sesuai template SISGP.</li>
            <li>Fotokopi password sesuai ketentuan.</li>
            <li>Ketentuan dokumen bisa dilihat di :<a href="https://si.se/en/apply/scholarships/swedish-institute-scholarships-for-global-professionals/">https://si.se/en/apply/scholarships/swedish-institute-scholarships-for-global-professionals/ </a>pada waktu yang ditentukan.</li>
          </ul>
          <p>Alur pendaftaran :</p>
          <ol>
            <li>
            Melakukan pendaftaran di : <a href="http://universityadmissions.se/">http://universityadmissions.se/</a></li>
            <ul>
              <li>Program studi yang memenuhi syarat beasiswa bisa dilihat di : 
                <a href="https://si.se/app/uploads/2018/11/eligible-programmes-si-scholarships-for-global-professionals-2019.pdf"> https://si.se/app/uploads/2018/11/eligible-programmes-si-scholarships-for-global-professionals-2019.pdf.</a></li>
              <li>Daftar maksimal 4 program studi paling lambat 15 Januari 2019.</li>
              <li>Setelah mengirim lamaran pendaftaran, pendaftar akan mendapat nomor PIN yang akan digunakan untuk mendaftar SISGP.</li>
              <li>1 Februari 2019 adalah deadline pengiriman bukti pembayaran biaya pendaftaran dan berkas yang diminta. Biaya pendaftaran tidak bisa dikembalikan.</li>
            </ul>
            <li>Mendaftar beasiswa</li>
            <ul>
              <li>Selama periode pendaftaran (4-14 Februari 2019) dokumen bisa dikirimkan secara digital melalui portal pendaftaran.</li>
              <li>Portal akan dibuka dari 00:00 CET 4 Februari 2019 sampai 23.59 CET 14 Februari 2019 di : <a href="https://si.se/en/apply/scholarships/swedish-institute-scholarships-for-global-professionals/#requireddoc">https://si.se/en/apply/scholarships/swedish-institute-scholarships-for-global-professionals/#requireddoc.</a></li>
            </ul>
            <li>Notifikasi dari University Admissions<a href="https://www.universityadmissions.se/intl/start"> https://www.universityadmissions.se/intl/start</a></li>
            <ul>
              <li>Hasil seleksi akan didapat pada 4 April 2019.</li>
              <li>Pendaftar yang diterima di program studi yang memenuhi syarat beasiswa akan diseleksi untuk mendapatkan beasiswa.</li>
              <li>JIka pendaftar ditempatkan di waiting list maka dan tidak diterima di program studi yang memenuhi syarat beasiswa tidak akan diseleksi untuk mendapatkan beasiswa.</li>
              <li>Tidak ada beasiswa untuk late admissions.</li>
              <li>JIka ada pernyataan lebih lanjut bisa mengontak University Admission melalui :<a href="https://www.universityadmissions.se/en/All-you-need-to-know1/admissionssupport/ ">https://www.universityadmissions.se/en/All-you-need-to-know1/admissionssupport/ .</a></li>
            </ul>
            <li>Pengumuman 300 penerima beasiswa</li>
            <ul>
              <li>Sekitar 300 penerima beasiswa SISGP 2019/2020 akan diumumkan di : <a href="https://si.se/en/">https://si.se/en/</a> pada 26 April 2019.</li>
              <li>Setiap penerima beasiswa akan mendapatkan penawaran beasiswa pada 29 April-3 Mei 2019.</li>
              <li>Jika pendaftar menerima penawaran beasiswa, pendaftar diminta untuk menerima atau menolak penawaran sesuai deadline. Alamat email yang diberikan saat pendaftaran merupakan tanggung jawab pendaftar.</li>
              <li>Karena banyaknya pendaftar, hanya penerima beasiswa yang akan diberitahu.</li>
            </ul>
          </ol>
          <p>Waiting list :</p> 
          <ul>
            <li>Beberapa peserta akan ditempatkan di waiting list. Penawaran beasiswa yang ditolak oleh kandidat yang memenuhi syarat akan ditawarkan ke peserta di waiting list. Pendaftar yang ditempatkan di waiting list tidak dijamin mendapatkan penawaran beasiswa.</li>
            <li>Waiting list akan diumumkan ketika penerima beasiswa sudah diumumkan. Jika nama pendaftar tidak ada di waiting list maka pendaftar tidak akan ditawarkan tempat cadangan.
            </li>
          </ul>

          
          <hr>

          
          
          

        </div>

        <div class="col-md-4">

          <div class="card mb-4">
            <h5 class="card-header">Cari</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <hr>

@endsection