<div class="container bg-white">
    <div class="row justify-content-center">
        <h1 class="fw-bold mt-5 mb-3 text-center">Paket 1P Internet Only</h1>
        @foreach ($jHarga as $item)
            <div class="col-12 col-lg-4 my-4">
                <div class="card">
                    <div class="w-full bg-danger text-center py-3 fw-bold text-light rounded-2 fs-5">
                        {{ $item['deskripsi'] }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class=" bg-danger text-center p-2 fw-bold text-light hero"
                                    style="border-radius: 0 20px 0 20px">
                                    <h4 class="fw-bolder p-0 m-0">30GB</h4>
                                    <p class="p-0 m-0">Mbps</p>
                                </div>
                            </div>
                            <div class="col-9 align-items-center">
                                <h4 class="fw-bold">{{ $item['judul'] }}</h4>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <p class="fw-bold">Benefit lainnya</p>
                            <div data-bs-spy="scroll" class="col overflow-auto" style="height: 100px">
                                <ul>
                                    @foreach ($item['list'] as $list)
                                        <li>{{ $list }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <hr>
                        <p>Rp<span
                                style="font-size: 30px; font-weight: 900">{{ number_format($item['harga'], 0, ',', '.') }}</span>/Bulan
                        </p>
                        <a href="{{ $waYa . 'Saya Ingin Berlangganan ' . $item['judul'] }}" class="btn btn-danger">Pesan
                            Sekarang</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="row justify-content-center">
        <h1 class="fw-bold mt-5 mb-3 text-center">Paket 2P Internet + TV</h1>
        @foreach ($paketTV as $tv)
            <div class="col-12 col-lg-4 my-4">
                <div class="card">
                    <div class="w-full bg-danger text-center py-3 fw-bold text-light rounded-2 fs-5">
                        {{ $tv['deskripsi'] }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class=" bg-danger text-center p-2 fw-bold text-light hero"
                                    style="border-radius: 0 20px 0 20px">
                                    <h4 class="fw-bolder p-0 m-0">30GB</h4>
                                    <p class="p-0 m-0">Mbps</p>
                                </div>
                            </div>
                            <div class="col-9 align-items-center">
                                <h4 class="fw-bold">{{ $tv['judul'] }}</h4>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <p class="fw-bold">Benefit lainnya</p>
                            <div data-bs-spy="scroll" class="col overflow-auto" style="height: 100px">
                                <ul>
                                    @foreach ($tv['list'] as $list)
                                        <li>{{ $list }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <hr>
                        <p>Rp<span
                                style="font-size: 30px; font-weight: 900">{{ number_format($tv['harga'], 0, ',', '.') }}</span>/Bulan
                        </p>
                        <a href="{{ $waYa . 'Saya Ingin Berlangganan ' . $tv['judul'] }}" class="btn btn-danger">Pesan
                            Sekarang</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

    <hr>
    <div class="row justify-content-center">
        <h1 class="fw-bold mt-5 mb-3 text-center">Paket 3P Internet + TV + Phone</h1>
        @foreach ($paketPhone as $phone)
            <div class="col-12 col-lg-4 my-4">
                <div class="card">
                    <div class="w-full bg-danger text-center py-3 fw-bold text-light rounded-2 fs-5">
                        {{ $phone['deskripsi'] }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class=" bg-danger text-center p-2 fw-bold text-light hero"
                                    style="border-radius: 0 20px 0 20px">
                                    <h4 class="fw-bolder p-0 m-0">30GB</h4>
                                    <p class="p-0 m-0">Mbps</p>
                                </div>
                            </div>
                            <div class="col-9 align-items-center">
                                <h4 class="fw-bold">{{ $phone['judul'] }}</h4>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <p class="fw-bold">Benefit lainnya</p>
                            <div data-bs-spy="scroll" class="col overflow-auto" style="height: 100px">
                                <ul>
                                    @foreach ($phone['list'] as $list)
                                        <li>{{ $list }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <hr>
                        <p>Rp<span
                                style="font-size: 30px; font-weight: 900">{{ number_format($phone['harga'], 0, ',', '.') }}</span>/Bulan
                        </p>
                        <a href="{{ $waYa . 'Saya Ingin Berlangganan ' . $phone['judul'] }}" class="btn btn-danger">Pesan
                            Sekarang</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
