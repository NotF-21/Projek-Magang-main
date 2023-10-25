@extends('layout.layout')
@section('title', 'Hubungi Kami')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="d-inline-block text-white text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Layanan Klinik Margi Rahayu</h3>
                    <p class=" text-white mb-md-4"><a class="text-white" href="{{url('/')}}">Beranda</a> > Hubungi Kami</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 hubungi-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h2 class="d-inline-block text-light text-uppercase border-bottom border-5">Kontak Klinik Margi Rahayu</h2>
                </div>
            </div>
            <div class="row justify-content-start px-3 d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.255274371915!2d112.51125856472626!3d-7.8683340748126716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788736521c753f%3A0xb6269082c3a8c64d!2sRb%2FKia%2FBp%20Margi%20Rahayu!5e0!3m2!1sen!2sid!4v1692534144923!5m2!1sen!2sid" class="col-lg-6 col-md-12" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="col-lg-6 col-md-12">
                    <p class="mb-2 text-light"><i class="fa fa-map-marker-alt text-black me-3 pr-2"></i>Jl. Panglima Sudirman No.91, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65313</p>
                    <p class="mb-2 text-light"><i class="fa fa-envelope text-black me-3 pr-2"></i>info@example.com</p>
                    <p class="mb-0 text-light"><i class="fa fa-phone-alt text-black me-3 pr-2"></i>(0341) 591223</p>

                    <form>
                        <div class="row g-3">
                            <div class="col-12 my-3">
                                <input type="text" class="form-control bg-light border-0" placeholder="Nama Anda" style="height: 55px;">
                            </div>
                            <div class="col-12 my-3">
                                <input type="text" class="form-control bg-light border-0" placeholder="Email Anda (wajib diisi)" style="height: 55px;">
                            </div>
                            <div class="col-12 my-3">
                                <textarea class="form-control bg-light border-0" id="exampleFormControlTextarea1" rows="7" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-12 my-3">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.bottom')
@endsection
