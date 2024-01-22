<!DOCTYPE html>
<html lang="en">
<head>
  @extends('layouts.main')
</head>
<body>
    @extends('layouts.navbar')



<!--banner-->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6">SMK TERATAI PUTIH GLOBAL II</h4>
        <h3 class="display-1">Selamat Datang</h3>
        <a href="#Layanan">
            <button class="btn btn-warning btn-lg" type="button">Selengkapnya</button>
        </a>
    </div>
  </div>
  <div class="container-fluid Layanan pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="Layanan">Jurusan</h2>
      <p>Jurusan Di SMK TERATAI PUTIH GLOBAL II</p>
      <div class="row pt-4">
        <div class="col-md-4">
          <span class="lingkaran"><i class="fa-brands fa-html5 fa-5x"></i></span>
          <h3 class="mt-3">Rekayasa Perangkat Lunak</h3>
          <p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam 
            bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer.</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fa-solid fa-video fa-5x"></i></span>
          <h3 class="mt-3">Desain Komunikasi Visual</h3>
          <p>Jurusan Desain Komunikasi Visual atau DKV adalah bagian dari ilmu desain yang mempelajari tentang konsep komunikasi dan ungkapan kreatif,
             dengan memanfaatkan elemen visual untuk menyampaikan pesan dengan tujuan tertentu.</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fa-solid fa-folder fa-5x"></i></span>
          <h3 class="mt-3">Akuntansi</h3>
          <p>Akuntansi adalah sebuah Kompetensi Keahlian (Jurusan) yang sangat berhubungan dengan angka dan hitung menghitung. 
            Hampir setiap hari kalian akan dihadapkan dengan pelajaran hitung menghitung.</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fa-solid fa-file-excel fa-5x"></i></span>
          <h3 class="mt-3">Otomisasi Tata Kelola Perkantoran</h3>
          <p>OTKP merupakan kepanjangan dari Otomatisasi dan Tata Kelola Perkantoran atau yang biasa disebut Administrasi Perkantoran adalah kompetensi keahlian yang mempelajari tentang pengetahuan,
             keterampilan dan sikap dalam menyelesaikan pekerjaan-pekerjaan kantor.</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fa-solid fa-business-time fa-5x"></i></span>
          <h3 class="mt-3">Bisnis Digital Dan Pemasaran</h3>
          <p>Bisnis Daring dan Pemasaran adalah sebuah kompetensi keahlian (jurusan) yang mempelajari dasar - dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet). </p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fa-solid fa-piggy-bank fa-5x"></i></span>
          <h3 class="mt-3">Perbankan</h3>
          <p>Perbankan merupakan studi yang mempelajari segala hal tentang ilmu-ilmu perbankan dan keuangan.</p>
        </div>
      </div>
    </div>
  </div>
  <!--Banner-->

  <!---Portofolio--->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="Portofolio">Galeri Sekolah</h2>
      <p></p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4">
          <div class="card">
            <img src="./image/gedung a.jpg" class="card-img-top" alt="..."
            width="200"
            height="200">
            <div class="card-body">
              <h5 class="card-title">Gedung A</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./image/gedung b.jpg" class="card-img-top" alt="..."
            width="200"
            height="200">
            <div class="card-body">
              <h5 class="card-title">Gedung B</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./image/gedung c.jpg" class="card-img-top" alt="..."
            width="200"
            height="200">
            <div class="card-body">
              <h5 class="card-title">Gedung C</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./image/gerbang.jpg" class="card-img-top" alt="..."
            width="200"
            height="200">
            <div class="card-body">
              <h5 class="card-title">Gerbang A</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./image/gerbang 2.jpg" class="card-img-top" alt="..."
            width="200"
            height="200">
            <div class="card-body">
              <h5 class="card-title">Gerbang B</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./image/lapangan.jpg" class="card-img-top" alt="..."
            width="200"
            height="200">
            <div class="card-body">
              <h5 class="card-title">Lapangan</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        </div>            
        </div>
      </div>
    </div>
  </div>
  <!---Portofolio--->

  <!---About Sekolah--->
  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <h2 class="display-3 text-center" id="About">About</h2>
      <p class="text-center">Sejarah SMK TERATAI PUTIH GLOBAL II</p>
      <div class="clearfix pt-5">
        <img src="./image/pembelajaran.jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" alt="">
        <p>SMK Teratai Putih Global 2 Bekasi merupakan salah satu Sekolah Menengah Kejuruan SMK yang didirikan oleh Yayasan Teratai Global Bekasi. Seperti SMK pada umumnya di Indonesia masa pendidikan sekolah di SMK Teratai Putih Global 2 Bekasi ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII.</p>
        <p>Kurikulum yang diterapkan disini yaitu kurikulum 2013 dengan alokasi waktu selama 10-12 jam pelajaran yang berlangsung dari hari Senin-Jumat.
          Sebelum memulai jam pelajaran, biasanya siswa-siswi mengadakan tadarus Al-Quran yang dipimpin oleh Bapak/Ibu guru yang bertugas.</p>
        <p>VISI:Menjadi Lembaga Pendidikan Berkualitas Terbaik dan Berwawasan Global</p>
        <p>MISI:Menyelengarakan Yayasan Pendidikan Berkualitas,Unggul,Terpercaya Dan Profesional</p>
      </div>
    </div>
  </div>
  <!--About Sekolah-->

  <!--Kepala Sekolah Dan Wakil-->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="Staff">Kepala Sekolah Dan Wakil</h2>
      <p></p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4 text-center tim">
          <img src="" alt="" class="rounded-circle mb-4">
          <h4>Kusnadi S.pd</h4>
          <p>Kepala Sekolah</p>
          <p>
            <a href="" class="sosmed"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="sosmed"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="sosmed"><i class="fa-brands fa-whatsapp"></i></i></a>
          </p>
        </div>
        <div class="col-md-4 text-center tim">
          <img src="" alt="" class="rounded-circle mb-4">
          <h4>Deni Rivani S.E</h4>
          <p>Wakil Kepala Sekolah</p>
          <p>
            <a href="" class="sosmed"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="sosmed"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="sosmed"><i class="fa-brands fa-whatsapp"></i></i></a>
          </p>
        </div>
        <div class="col-md-4 text-center tim">
          <img src="./nino1.jpeg" alt="" class="rounded-circle mb-4">
          <h4>Ahmad Amin iswanto</h4>
          <p>Guru Bidang RPL</p>
          <p>
            <a href="" class="sosmed"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="sosmed"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="sosmed"><i class="fa-brands fa-whatsapp"></i></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--Kepala Sekolah Dan Wakil-->
@extends('layouts.footer')