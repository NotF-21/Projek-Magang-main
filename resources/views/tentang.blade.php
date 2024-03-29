@extends('layout.layout')
@section('title', 'Tentang Kami')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-4 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Pratama Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Tentang Kami</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 px-5 mb-4">
        <div class="row mb-4">
            <div class="col-12 justify-content-center d-flex">
                <img src="{{asset("images/tentang2.jpeg")}}" alt="" width="50%">
            </div>
        </div>
        <div class="row justify-content-center d-flex mx-3 px-3">
            <h2 class="d-inline-block text-dark text-uppercase border-bottom border-5">Tentang Kami</h2>
            <p class="mb-2 text-dark">Klinik Pratama Margi Rahayu telah berdiri sejak tahun 1958 yang berawal dari rumah bersalin, balai pengobatan, balai kesehatan ibu dan anak. Lokasi dari klinik ini berada di Jalan Panglima Sudirman No.91, Pesanggrahan, Batu. Karena berlokasi di Batu yang merupakan tujuan dari destinasi para wisatawan, Batu menjadi pusat ramainya para turis yang ingin menikmati wisata alam maupun hiburan yang disediakan di sana. Dikarenakan banyaknya turis yang datang ke Batu maka diperlukan cara untuk mengatasi terbatasnya informasi tentang klinik atau sebuah pusat kesehatan untuk keadaan darurat.</p>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <img src="{{asset("images/bpjs.png")}}" alt="" width="50%" height="50%">
                <h2 style="color: green">Klinik ini melayani seluruh pasien yang memiliki BPJS</h2>
            </div>
        </div>
    </div>

    @include('layout.bottom')
@endsection
