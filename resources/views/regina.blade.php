@extends('layout.master')
@section('container')

<link rel="stylesheet" href="{{ asset('/css/app.css') }}">

<style>
    .card {
        max-width: 1200px;
        margin: 30px auto 0;
    }

    .story-text {
        text-align: justify;
    }
</style>

<div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/regina.png')}}" class="img-fluid rounded-start" alt="daniel">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Regina Patricia Hartawan| 2602098614</h5>
          <h6 class="card-text">Tanggal Lahir : 12 Maret 2004</h6>
          <h6 class="card-text">Hobi          : Menggambar</h6>
          <h6 class="card-text">MBTI : INFJ</h6>
          <h6 class="card-text">Instagram : @reginaph12 | <a href="https://www.instagram.com/reginaph12/">Link</a></h6>
          <br>
          <h5 class="story-judul">Story at Binus</h5>
          <p class="story-text">Kuliah di BINUS Malang jurusan Computer Science sungguh merupakan pengalaman yang luar biasa! Dari awal, suasana kampus yang ramah dan menyambut serta komunitas mahasiswa yang solid langsung membuatku merasa seperti di rumah. Dosen-dosen kami tidak hanya memiliki pengetahuan yang luas dalam bidang mereka, tetapi mereka juga peduli dan selalu siap memberikan bantuan ekstra untuk membantu kami mengatasi setiap tantangan pembelajaran. Materi perkuliahan yang disajikan sangat menarik dan relevan dengan perkembangan teknologi saat ini, membuatku semakin termotivasi untuk terus belajar dan berkembang. Tidak hanya itu, BINUS Malang juga menyediakan fasilitas yang lengkap dan mendukung, mulai dari laboratorium komputer yang canggih hingga perpustakaan yang kaya akan sumber daya. Selain belajar di dalam kelas, banyak kesempatan untuk terlibat dalam proyek-proyek nyata dan kegiatan ekstrakurikuler yang menarik, yang membantu kami mengembangkan keterampilan sosial dan kepemimpinan. Saya benar-benar bersyukur telah memilih BINUS Malang sebagai tempat untuk mengejar impian saya dalam bidang teknologi. Terima kasih BINUS Malang atas semua pengalaman tak terlupakan ini!</p>
        </div>
      </div>
    </div>
  </div>

@stop
