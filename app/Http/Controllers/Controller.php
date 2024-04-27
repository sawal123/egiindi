<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function utama()
    {
        $urlV = ['https://www.youtube.com/embed/jWn6Z1fsIDI', 'https://www.youtube.com/embed/oapqO3Lz97M', 'https://www.youtube.com/embed/p-4B79WGuy0'];
        $wa = 'https://wa.me/6281261658699?text=Saya+ingin+berlangganan+indihome';
        $waYa = 'https://wa.me/6281261658699?text=';
        // dd($urlV);
        $jHarga = [
            [
                'judul' => 'JITU 1 - 3P Internet + TV + Phone up to 30 Mbps',
                'kuota' => '30',
                'harga' => '220000',
                'list' => ['Biaya pasang baru Rp. 100.000', 'Kecepatan internet hingga 30 Mbps', 'Paket Low FUP', 'Harga belum PPN 11%'],
                'deskripsi' => 'Paling Laris'

            ],
            [
                'judul' => 'JITU 1 - 1P Internet Saja - Reguler',
                'kuota' => '30',
                'harga' => '280000',
                'list' => ['Promo biaya pasang baru Rp. 50.000', 'Kecepatan internet hingga 30 Mbps', 'Harga belum PPN 11%'],
                'deskripsi' => 'Penawaran Terbaik'

            ],
            [
                'judul' => 'JITU 1 - 1P Internet Saja up to 50 Mbps',
                'kuota' => '50',
                'harga' => '325000',
                'list' => ['Gratis Pemasangan', 'Kecepatan internet hingga 50 Mbps', 'Harga belum PPN 11%'],
                'deskripsi' => 'Penawaran Standart'

            ],
            [
                'judul' => 'JITU 1 - 1P Internet Saja up to 100 Mbps',
                'kuota' => '100',
                'harga' => '425000',
                'list' => ['Gratis Pemasangan', 'Kecepatan internet hingga 100 Mbps', 'Harga belum PPN 11%'],
                'deskripsi' => 'Premium'

            ],
        ];

        $paketTV = [
            [
                'judul' => 'JITU 1 - 2P Internet + TV up to 30 Mbps',
                'kuota' => '30',
                'harga' => '340000',
                'list' => ['Biaya pasang baru Rp. 50.000 ', 'Kecepatan internet hingga 30 Mbps', 'Paket 81 Channel', 'Paket Bundling Disney+ Hotstar', 'Harga belum PPN 11%'],
                'deskripsi' => ''

            ],
            [
                'judul' => 'JITU 1 - 2P Internet + TV up to 50 Mbps',
                'kuota' => '50',
                'harga' => '505000',
                'list' => ['Kecepatan internet hingga 50 Mbps', 'Paket 81 Channel', 'Paket Bundling Disney+ Hotstar, Catchplay, WeTV, Iflix, Vidio', 'Harga belum PPN 11%'],
                'deskripsi' => ''

            ],
        ];
        $paketPhone = [
            [
                'judul' => 'JITU 1 - 3P Internet + TV + Phone up to 30 Mbps',
                'kuota' => '30',
                'harga' => '360000',
                'list' => ['Biaya pasang baru Rp. 50.000 ', 'Kecepatan internet hingga 30 Mbps', 'Paket 81 Channel', 'Paket Bundling Disney+ Hotstar', 'Telepon Rumah 100 Menit', 'Harga belum PPN 11%'],
                'deskripsi' => ''
            ],
            [
                'judul' => 'JITU 1 - 3P Internet + TV + Phone up to 50 Mbps',
                'kuota' => '50',
                'harga' => '515000',
                'list' => ['Biaya pasang GRATIS', 'Kecepatan internet hingga 50 Mbps', 'Paket 81 Channel', 'Paket Bundling Disney+ Hotstar, Catchplay, WeTV, Iflix, Vidio', 'Telepon Rumah 100 Menit', 'Harga belum PPN 11%'],
                'deskripsi' => ''
            ],
        ];
        // dd($jHarga);
        return view('page.index', [
            'jHarga' => $jHarga,
            'url' => $urlV,
            'wa' => $wa,
            'waYa' => $waYa,
            'paketTV'=>$paketTV,
            'paketPhone'=> $paketPhone
        ]);
    }
}
