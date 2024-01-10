@extends('layout.layout')
@section('title', 'Vaksinasi')

@section('content')
@include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Pratama Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Vaksinasi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 px-5">
        <div class="row mb-2">
            <div class="col-12 justify-content-center d-flex">
                <img id="expandedImg" src="{{asset("images/v1.jpg")}}" alt="" width="50%">
            </div>
        </div>
        <div class="row justify-content-center d-flex mx-3 px-3">
            <h2 class="d-inline-block text-dark text-uppercase border-bottom border-5">Vaksinasi</h2>
            <p class="mb-2 text-dark">Klinik Pratama Margi Rahayu menawarkan layanan vaksinasi yang komprehensif, memastikan perlindungan optimal bagi semua kelompok usia. Dengan tenaga medis terlatih dan vaksin berkualitas tinggi, klinik ini berkomitmen untuk meningkatkan imunitas komunitas dan memberikan solusi pencegahan penyakit yang efektif.</p>
        </div>
    </div>

    @include('layout.bottom')
@endsection
