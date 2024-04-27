@extends('master.app')


@section('content')
    <style>
        .hero {
            background: rgb(186, 0, 36);
            background: linear-gradient(90deg, rgba(186, 0, 36, 1) 0%, rgba(255, 1, 39, 1) 35%, rgba(253, 25, 94, 1) 100%);
        }

        .white {
            color: white;
        }
    </style>
    <section id="home">
        @include('page.hero')
    </section>
    <section>
        @include('page.slide')
    </section>
    <section id="harga">
        @include('page.harga')
    </section>
    {{-- <section id="promo">
        <div class="container bg-white py-5">


            <div class="text-center">
                <h2 class="text-center my-3">Spesial Untuk Kamu</h2>
                <img class="rounded-5" src="{{ asset('images/flyer.jpg') }}" style="max-width: 100%; height: auto;"
                    alt="">
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{$wa}}" style="max-width: 100%" class="btn btn-danger"><i class="bi bi-0-square-fill"></i>Pesan Sekarang</a>
            </div>

          
        </div>
    </section> --}}
    <section id="layanan">
        <div class="container bg-white py-5">
            <h2 class="text-center ">Tersedia pilihan layanan Add-on sesuai keinginan
                dan kebutuhan Anda</h2>
            <div class="row align-items-stretch">
                <div class="col">
                    <div class="card my-2" style="min-width: 18rem; height: 300px;">
                        <img src="{{ asset('images/icon/Netflix_icon.png') }}" style="width: 100px" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text">Nonton netflix tanpa perlu pake kartu kredit, dalam satu tagihan IndiHome.
                                Yuk, rasain serunya nonton film, drama series, TV series, hingga Netflix Original, sekarang.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card my-2" style="min-width: 18rem; height: 300px;">
                        <img src="{{ asset('images/icon/icon-speed.svg') }}" style="width: 100px" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text">Tambah kecepatan internet secara temporer sesuai dengan keinginan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card my-2" style="min-width: 18rem; height: 300px;">
                        <img src="{{ asset('images/icon/icon-flash.svg') }}" style="width: 100px" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text">Upgrade Speed internet cepat Anda secara permanen sesuai dengan kebutuhan
                                Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card my-2" style="min-width: 18rem; height: 300px;">
                        <img src="{{ asset('images/icon/minipack-red.svg') }}" style="width: 100px" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text">Tambah beragam channel-channel favorit sesuai dengan keinginan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container bg-white">
            <div class="row">
                <div class="col-12 col-lg-6 p-5">
                    <h2>IndiHome tersedia hingga
                        pelosok negeri</h2>
                    <p>
                        IndiHome hadir di 514 Kabupaten atau Kota, membentang dengan jaringan terluas di seluruh penjuru
                        Indonesia bahkan hingga pelosok negeri, dan sudah dipercaya oleh 8jt++ pelanggan
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('images/peta.png') }}" style="max-width: 100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container bg-white text-center mt-5">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($url as $key=>$u)
                    
                        <div class="carousel-item {{$key === 0 ? 'active': '' }}">
                            <iframe class="rounded-4" width="100%" height="395"
                                src="{{$u}}"
                                title="Menjadi Sultan Gaming dengan IndiHome Paket Gamer" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </section>
    <footer class="text-center bg-danger align-content-center fw-bold text-light mt-5" style="height: 80px ;  ">
       Egi Sales Indihome - &copy; 2024
    </footer>
@endsection
