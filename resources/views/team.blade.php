@extends('layout.layout')
@section('title', 'Tim Medis')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Pratama Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Tim Medis</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="layanan">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-success text-uppercase border-bottom border-5">Tim Kami</h5>
                <h1 class="display-4">Wajah Staf Kami</h1>
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/andrik.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-1">dr. Andri Kurniawan Junaidy</h4>
                        <p class="mb-2">Dokter Penanggung Jawab Klinik</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/ivani.jpg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">dr. Ivan Indrianto</h4>
                        <p class="mb-2">Dokter Umum</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/dwis.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">drg. Dwi Saputro</h4>
                        <p class="mb-2">Dokter Gigi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/eeni.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Een Indrawati S. Kep. Ns</h4>
                        <p class="mb-2">Perawat</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/ivat.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Iva Trikarya Kustia Ningrum, AMd. Kep</h4>
                        <p class="mb-2">Perawat</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/harnal.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Sr. Harna Lumban Tobing, S. Kep, Ns</h4>
                        <p class="mb-2">Perawat</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/dianp.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Dian Purnamasari, AMd.Keb</h4>
                        <p class="mb-2">Bidan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/mariad.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Maria De Gratis Mesakh, AMd.Keb</h4>
                        <p class="mb-2">Bidan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/nura.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Nur Afni Septianing Tyas, AMd.Keb</h4>
                        <p class="mb-2">Bidan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <img class="mt-3 mb-4" src="{{asset("images/kartikaf.jpeg")}}" alt="" width="135vh" height="200vh">
                        <h4 class="mb-3">Kartika Febrianti, Sr. Farm</h4>
                        <p class="mb-2">Apoteker</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.bottom')
@endsection
