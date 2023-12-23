@extends('layout.layout')
@section('title', 'Hubungi Kami')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Pratama Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Hubungi Kami</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 hubungi-header justify-content-center">
        <div class="row justify-content-start">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h2 class="d-inline-block text-light text-uppercase border-bottom border-5">Kontak Klinik Pratama Margi Rahayu</h2>
            </div>
        </div>
        <div class="row px-3 text-center">
            <div class="col-12">
                <p class="mb-2 text-light"><i class="fa fa-map-marker-alt text-black me-3 pr-2"></i>Jl. Panglima Sudirman No.91, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65313</p>
                <p class="mb-2 text-light"><i class="fa fa-envelope text-black me-3 pr-2"></i>info@example.com</p>
                <p class="mb-0 text-light"><i class="fa fa-phone-alt text-black me-3 pr-2"></i>(0341) 591223</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.255274371915!2d112.51125856472626!3d-7.8683340748126716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788736521c753f%3A0xb6269082c3a8c64d!2sRb%2FKia%2FBp%20Margi%20Rahayu!5e0!3m2!1sen!2sid!4v1692534144923!5m2!1sen!2sid" class="col-lg-6 col-md-12" style="border:0; width:100%; height:50vh" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    @include('layout.bottom')
@endsection
