@extends('layout.layout')
@section('title', 'Farmasi')

@section('content')
@include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Pratama Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Farmasi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 px-5">
        <div class="row mb-2">
            <div class="col-12 justify-content-center d-flex">
                <button type="button" id="prevugd" class="btn btn-success" onclick="prev();"><i class="fa fa-solid fa-arrow-left" style="color: #ffffff;"></i></button>
                <img id="expandedImg" src="{{asset("images/f1.jpeg")}}" alt="" width="50%">
                <button type="button" id="nextugd" class="btn btn-success" onclick="next();"><i class="fa fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="row mb-4 justify-content-center">
            <div class="column">
              <img src="{{asset("images/f1.jpeg")}}" alt="" width="120px" height="90px" onclick="tabGal(this);">
            </div>
            <div class="column">
              <img src="{{asset("images/f2.jpeg")}}" alt="" width="120px" height="90px" onclick="tabGal(this);">
            </div>
          </div>
        <div class="row justify-content-center d-flex mx-3 px-3">
            <h2 class="d-inline-block text-dark text-uppercase border-bottom border-5">Farmasi</h2>
            <p class="mb-2 text-dark">Klinik Pratama Margi Rahayu menawarkan layanan farmasi yang komprehensif dengan stok obat yang lengkap dan berkualitas. Dengan pelayanan yang cepat dan ahli farmasi yang siap memberikan konsultasi, klinik ini memastikan pasien mendapatkan akses mudah dan aman ke obat-obatan yang dibutuhkan untuk pemulihan dan pengelolaan kesehatan mereka.</p>
        </div>
    </div>

    <script>
        function tabGal(imgs) {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");

            var sl = imgs.src.slice(-6);
            sl = sl.slice(0,1);

            if (sl==1) expandImg.src = "{{asset("images/f1.jpeg")}}";
            else if (sl==2) expandImg.src = "{{asset("images/f2.jpeg")}}";

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }

        function prev() {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");

            var sl = expandImg.src.slice(-6);
            sl = sl.slice(0,1);

            if (sl==1) expandImg.src = "{{asset("images/f2.jpeg")}}";
            else if (sl==2) expandImg.src = "{{asset("images/f1.jpeg")}}";

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }

        function next() {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");

            var sl = expandImg.src.slice(-6);
            sl = sl.slice(0,1);

            if (sl==1) expandImg.src = "{{asset("images/f2.jpeg")}}";
            else if (sl==2) expandImg.src = "{{asset("images/f1.jpeg")}}";

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }
    </script>

    @include('layout.bottom')
@endsection
