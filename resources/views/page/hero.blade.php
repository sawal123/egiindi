<div class="hero py-5">
    <div class="container">
        <div class="row align-items-center"> <!-- Tambahkan kelas align-items-center untuk mengatur vertikal tengah -->
            <div class="col-lg-6 col-12 ">
                {{-- <div class="d-flex flex-column justify-content-center h-100"> <!-- Tambahkan kelas flex-column dan justify-content-center untuk mengatur vertikal tengah --> --}}
                <h1 class="fw-bold text-light">Hi, Saya Egi</h1>
                <h2 class="text-light">Salesman Indihome</h2>
                <p class="fw-medium text-light">
                    Dengan IndiHome, kini mendaftar layanan internet tidak perlu lagi merepotkan! Nikmati kemudahan mendaftar langsung dari rumah, tanpa harus keluar dan meninggalkan kesibukan Anda. Layanan kami tersedia di sejumlah wilayah, termasuk Medan dan sekitarnya seperti Tembung, Marelan, Johor, Helvetia, Padang Bulan, Amplas, bahkan hingga Tanjung Morawa. Jadi, tunggu apa lagi? Segera dapatkan koneksi internet berkualitas dari kenyamanan rumah Anda sendiri!
                </p>
                <!-- Tambahkan kelas text-center untuk mengatur horisontal tengah -->
                <a href="{{$wa}}" class="btn btn-light fw-bold">Hubungi Saya</a>
                <!-- Tambahkan kelas mx-auto untuk mengatur horisontal tengah -->
                {{-- </div> --}}
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('images/wifi.svg') }}" alt="">
            </div>
        </div>
    </div>
</div>