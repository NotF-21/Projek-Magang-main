@extends('layout.layout')
@section('title', 'Beranda')

@section('content')
    @include('layout.navbar')
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Selamat Datang di Klinik Pratama Margi Rahayu</h5>
                    <h1 class="display-4 text-white mb-md-4"></h1>
                    <div class="pt-2">
                        <a href="{{url('tim-medis')}}" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2 shadow">Cari Dokter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{asset("images/tentang1.jpg")}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-success text-uppercase border-bottom border-5"><a href="{{url('tentang-kami')}}" style="text-decoration: none; color:green">Tentang Kami</a></h5>
                        <h1 class="display-4">Mengenal Klinik Pratama Margi Rahayu</h1>
                    </div>
                    <p class="text-justify">Klinik Pratama Rawat Inap Margi Rahayu telah berdiri sejak tahun 1958 yang berawal dari rumah bersalin, balai pengobatan, balai kesehatan ibu dan anak. Lokasi dari klinik ini berada di Jalan Panglima Sudirman No.91, Pesanggrahan, Batu. Karena berlokasi di Batu yang merupakan tujuan dari destinasi para wisatawan, Batu menjadi pusat ramainya para turis yang ingin menikmati wisata alam maupun hiburan yang disediakan di sana. Dikarenakan banyaknya turis yang datang ke Batu maka diperlukan cara untuk mengatasi terbatasnya informasi tentang klinik atau sebuah pusat kesehatan untuk keadaan darurat.</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4 shadow-sm">
                                <i class="fa fa-3x fa-user-md text-success mb-3"></i>
                                <h6 class="mb-0">Dokter<small class="d-block text-success">Terjamin</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4 shadow-sm">
                                <i class="fa fa-3x fa-procedures text-success mb-3"></i>
                                <h6 class="mb-0">Layanan<small class="d-block text-success">Gawat Darurat</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4 shadow-sm">
                                <i class="fa fa-3x fa-microscope text-success mb-3"></i>
                                <h6 class="mb-0">Layanan<small class="d-block text-success">Laboratorium</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="layanan">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-success text-uppercase border-bottom border-5">Layanan Medis</h5>
                <h1 class="display-4">Layanan yang Kami Sediakan</h1>
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3">Unit Gawat Darurat</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{url('/layanan/unit-gawat-darurat')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3">Perawatan Rawat Inap</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{url('/layanan/rawat-inap')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Perawatan Rawat Jalan</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{url('/layanan/rawat-jalan')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-pills text-white"></i>
                        </div>
                        <h4 class="mb-3">Vaksinasi</h4>
                        <p class="m-0">Klinik Pratama Margi Rahayu menyediakan layanan vaksinasi untuk umum</p>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{url('/layanan/vaksinasi')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Uji Laboratorium</h4>
                        <p class="m-0">Uji darah dan dapatkan hasilnya di Laboratorium kami</p>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{url('/layanan/uji-laboratorium')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-solid fa-tooth text-white"></i>
                        </div>
                        <h4 class="mb-3">Poli Gigi</h4>
                        <p class="m-0">Dapatkan Layanan Poligigi untuk merawat gigi Anda</p>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{url('/layanan/poligigi')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.bottom')
@endsection
