<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasang Wifi Indihome</title>

    <meta name="description"
        content="Anda mencari layanan pasang WiFi yang handal dan terjangkau di Medan? Kami adalah solusinya! Dengan pengalaman bertahun-tahun dan reputasi yang solid, kami menawarkan layanan pasang WiFi yang terpercaya dan berkualitas tinggi untuk rumah, kantor, dan bisnis di seluruh kota Medan. Nikmati kecepatan internet yang stabil, dukungan pelanggan yang ramah, dan harga yang kompetitif. Hubungi kami hari ini untuk mendapatkan penawaran terbaik!" />
    <meta name="keyword"
        content="Pasang Wifi Medan. wifi indihome, wifi medan sekitar, indihome medan, pasang indihome, berlangganan indihome , pasang wifi, pasang wifi murah, pasang wifi gratis" />
    <meta property="og:title" content="Pasang Wifi Medan">

    <meta name="google-site-verification" content="5heHNwIB_ogTysp6_ULCW-qwnX2aVmgxTchb0mzbvpM" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9GGS8KMJXY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9GGS8KMJXY');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NL7TRMGZ');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="icon" href="{{ asset('images/icon/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-D-sv12UV.css') }}">
    <style>
        .corner-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .corner-button button {
            background-color: #007bff;
            /* Warna latar belakang tombol */
            color: #ffffff;
            /* Warna teks tombol */
            border: none;
            padding: 10px 20px;
            /* Padding pada tombol */
            border-radius: 5px;
            /* Gaya sudut tombol */
            cursor: pointer;
            /* Properti lainnya sesuai kebutuhan */
        }
    </style>

</head>

<body style="background: rgb(247, 247, 247)">
    @include('master.nav')

    @yield('content')

    <div class="corner-button">
        <a href="{{ $wa }}" class="btn btn-danger">
            <img src="{{ asset('images/icon/wa.png') }}" style="width: 30px" alt=""> Hubungi Saya
        </a>
    </div>

    <script src="{{ asset('build/assets/app-BziwsqBe.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.multiple-items').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NL7TRMGZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
