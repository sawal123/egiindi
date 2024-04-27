<style>
    .nav:hover{
        /* border-radius: 50%;
        border: 1px solid red; */
        font-weight: bold

    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo_indiHome.png') }}" 
                height="50" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> --}}
                <li class="nav-item nav">
                    <a class="nav-link active" aria-current="page" href="#harga">Harga</a>
                </li>
                <li class="nav-item nav">
                    <a class="nav-link active" aria-current="page" href="{{$wa.' Apakah ada promo?'}}">Promo</a>
                </li>
                <li class="nav-item nav">
                    <a class="nav-link active" aria-current="page" href="#layanan">Layanan</a>
                </li>
                
            </ul>
            <div class="d-flex">
                <a href="{{$wa}}" class="btn btn-dark">Pesan Sekarang</a>
            </div>
        </div>
    </div>
</nav>
