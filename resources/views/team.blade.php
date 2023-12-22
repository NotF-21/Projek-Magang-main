@extends('layout.layout')
@section('title', 'Tim Medis')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Margi Rahayu</h3>
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
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user text-white"></i>
                        </div>
                        <h4 class="mb-3">Dr Lorem</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#" data-toggle="modal" data-target="#modalDokter1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user text-white"></i>
                        </div>
                        <h4 class="mb-3">Dr Lorem</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#" data-toggle="modal" data-target="#modalDokter1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user text-white"></i>
                        </div>
                        <h4 class="mb-3">Dr Lorem</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#" data-toggle="modal" data-target="#modalDokter1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user text-white"></i>
                        </div>
                        <h4 class="mb-3">Perawat Ipsum</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#" data-toggle="modal" data-target="#modalPerawat1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user text-white"></i>
                        </div>
                        <h4 class="mb-3">Perawat Ipsum</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#" data-toggle="modal" data-target="#modalPerawat1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-solid fa-tooth text-white"></i>
                        </div>
                        <h4 class="mb-3">Perawat Ipsum</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#" data-toggle="modal" data-target="#modalPerawat1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDokter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dokter Lorem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <p>Biografi Singkat Dokter Lorem</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="modalPerawat1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dokter Lorem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <p>Biografi Singkat Perawat Ipsum</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

    @include('layout.bottom')
@endsection
