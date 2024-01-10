@extends('layout.layout')
@section('title', 'Uji Laboratorium')

@section('content')
@include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Pratama Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Uji Laboratorium</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 px-5">
        <div class="row mb-2">
            <div class="col-12 justify-content-center d-flex">
                <img id="expandedImg" src="{{asset("images/lab1.jpg")}}" alt="" width="50%">
            </div>
        </div>
        <div class="row justify-content-center d-flex mx-3 px-3">
            <h2 class="d-inline-block text-dark text-uppercase border-bottom border-5">Uji Laboratorium</h2>
            <p class="mb-2 text-dark">
                Klinik Pratama Margi Rahayu menyediakan layanan uji laboratorium untuk mendukung diagnosis yang akurat. Dengan tim profesional, klinik ini memastikan hasil uji yang tepat dan cepat, mendukung upaya deteksi dini dan penanganan penyakit secara efektif.</p>
        </div>
    </div>

    @include('layout.bottom')
@endsection
