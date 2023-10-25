<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset("images/logotransp.png")}}" width="15%" height="15%" alt="">
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                    <a href="{{url('tentang-kami')}}" class="nav-item nav-link {{ Request::url() == url('/tentang-kami') ? 'active' : '' }}">Tentang Kami</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url('/layanan/unit-gawat-darurat')}}" class="dropdown-item">Unit Gawat Darurat</a>
                            <a href="{{url('/layanan/rawat-inap')}}" class="dropdown-item">Rawat Inap</a>
                            <a href="{{url('/layanan/rawat-jalan')}}" class="dropdown-item">Rawat Jalan</a>
                            <a href="{{url('/layanan/poligigi')}}" class="dropdown-item">Poligigi</a>
                            <a href="{{url('/layanan/vaksinasi')}}" class="dropdown-item">Vaksinasi</a>
                            <a href="{{url('/layanan/uji-laboratorium')}}" class="dropdown-item">Uji Laboratorium</a>
                        </div>
                    </div>
                    <a href="{{url('tentang-kami')}}" class="nav-item nav-link {{ Request::url() == url('/tentang-kami') ? 'active' : '' }}">Tim Medis</a>
                    <a href="{{url('hubungi-kami')}}" class="nav-item nav-link {{ Request::url() == url('/hubungi-kami') ? 'active' : '' }}">Hubungi Kami</a>
                </div>
            </div>
        </nav>
    </div>
</div>
