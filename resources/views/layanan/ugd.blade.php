@extends('layout.layout')
@section('title', 'Unit Gawat Darurat')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Unit Gawat Darurat</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 px-5">
        <div class="row mb-2">
            <div class="col-12 justify-content-center d-flex">
                <button type="button" id="prevugd" class="btn btn-info" onclick="prev();"><i class="fa fa-solid fa-arrow-left" style="color: #ffffff;"></i></button>
                <img id="expandedImg" src="{{asset("images/ugd1.jpg")}}" alt="" width="50%">
                <button type="button" id="nextugd" class="btn btn-info" onclick="next();"><i class="fa fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="row mb-4 justify-content-center">
            <div class="column">
              <img src="{{asset("images/ugdtab1.jpg")}}" alt="" width="120px" height="90px" onclick="tabGal(this);">
            </div>
            <div class="column">
              <img src="{{asset("images/ugdtab2.jpg")}}" alt="" width="120px" height="90px" onclick="tabGal(this);">
            </div>
            <div class="column">
              <img src="{{asset("images/ugdtab3.jpg")}}" alt="" width="120px" height="90px" onclick="tabGal(this);">
            </div>
            <div class="column">
              <img src="{{asset("images/ugdtab4.jpg")}}" alt="" width="120px" height="90px" onclick="tabGal(this);">
            </div>
          </div>
        <div class="row justify-content-center d-flex mx-3 px-3">
            <h2 class="d-inline-block text-dark text-uppercase border-bottom border-5">Unit Gawat Darurat</h2>
            <p class="mb-2 text-dark">Klinik Pratama Rawat Inap Margi Rahayu telah berdiri sejak tahun 1958 yang berawal dari rumah bersalin, balai pengobatan, balai kesehatan ibu dan anak. Lokasi dari klinik ini berada di Jalan Panglima Sudirman No.91, Pesanggrahan, Batu. Karena berlokasi di Batu yang merupakan tujuan dari destinasi para wisatawan, Batu menjadi pusat ramainya para turis yang ingin menikmati wisata alam maupun hiburan yang disediakan di sana. Dikarenakan banyaknya turis yang datang ke Batu maka diperlukan cara untuk mengatasi terbatasnya informasi tentang klinik atau sebuah pusat kesehatan untuk keadaan darurat.</p>
        </div>
    </div>

    <script>
        function tabGal(imgs) {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");
            // Get the image text
            var imgText = document.getElementById("imgtext");

            var sl = imgs.src.slice(-5);
            sl = sl.slice(0,1);

            if (sl==1) expandImg.src = "{{asset("images/ugd1.jpg")}}";
            else if (sl==2) expandImg.src = "{{asset("images/ugd2.jpg")}}";
            else if (sl==3) expandImg.src = "{{asset("images/ugd3.jpg")}}";
            else if (sl==4) expandImg.src = "{{asset("images/ugd4.jpg")}}";

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }

        function prev() {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");

            var sl = expandImg.src.slice(-5);
            sl = sl.slice(0,1);

            if (sl==1) expandImg.src = "{{asset("images/ugd4.jpg")}}";
            else if (sl==2) expandImg.src = "{{asset("images/ugd1.jpg")}}";
            else if (sl==3) expandImg.src = "{{asset("images/ugd2.jpg")}}";
            else if (sl==4) expandImg.src = "{{asset("images/ugd3.jpg")}}";

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }

        function next() {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");

            var sl = expandImg.src.slice(-5);
            sl = sl.slice(0,1);

            if (sl==1) expandImg.src = "{{asset("images/ugd2.jpg")}}";
            else if (sl==2) expandImg.src = "{{asset("images/ugd3.jpg")}}";
            else if (sl==3) expandImg.src = "{{asset("images/ugd4.jpg")}}";
            else if (sl==4) expandImg.src = "{{asset("images/ugd1.jpg")}}";

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }
    </script>

    @include('layout.bottom')
@endsection
