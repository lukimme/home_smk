<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    //berita terkini
    public function terbaru()
        {
            $base = config('api.base_url');
            $timeout = config('api.timeout');
            $connect = config('api.connect_timeout');

            try {
                $client = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
                $response = $client->get('newss');
                $responsebody = $response->getBody()->getContents();
                $data = json_decode($responsebody) ?: [];

                // logo
                $client3 = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
                $response3 = $client3->get('logosh');
                $responsebody3 = $response3->getBody()->getContents();
                $logo = json_decode($responsebody3) ?: [];

                // guru
                $client4 = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
                $response4 = $client4->get('guru');
                $responsebody4 = $response4->getBody()->getContents();
                $guru = json_decode($responsebody4) ?: [];

                // kategori/jurusan
                $client2 = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
                $response2 = $client2->get('kategoriid');
                $responsebody2 = $response2->getBody()->getContents();
                $arrKategori = json_decode($responsebody2) ?: [];
                $data2 = $arrKategori[0] ?? null;
                $data3 = $arrKategori[1] ?? null;
                $data4 = $arrKategori[2] ?? null;
                $data5 = $arrKategori[3] ?? null;

                $client5 = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
                $response5 = $client5->get('newss');
                $responsebody5 = $response5->getBody()->getContents();
                $data9 = json_decode($responsebody5) ?: [];

                $collection5 = collect($data9);
                $collection = collect($data);

                $prestasi = collect($data)->where('id_kategori', 10)->take(3)->all();
                $pengumuman = collect($data)->where('id_kategori', 2)->take(3)->all();
                $berita = collect($data)->where('id_kategori', 1)->take(3)->all();
                $informasi = collect($data)->where('id_kategori', 9)->take(5)->all();
                $terbaru = $collection5->sortByDesc('id')->take(5);

            } catch (\GuzzleHttp\Exception\GuzzleException $e) {
                \Log::error('UtamaController::terbaru API error: '.$e->getMessage());
                // fallback kosong agar view tidak error
                $informasi = [];
                $data2 = $data3 = $data4 = $data5 = [];
                $prestasi = $pengumuman = $berita = [];
                $logo = $guru = [];
                $terbaru = collect([]);
            }

            return view('index', ['informasi'=>$informasi ?? [], 'data2'=>$data2, 'data3'=>$data3, 'data4'=>$data4, 'data5'=>$data5, 'prestasi'=>$prestasi, 'pengumuman'=>$pengumuman, 'berita'=>$berita, 'logo'=>$logo, 'guru'=>$guru, 'terbaru'=>$terbaru]);
        }
        
        
        // untuk halaman / page prestasi
        public function prestasi()
        {
            $base = config('api.base_url');
            try {
                $client = new Client(['base_uri' => $base, 'timeout' => config('api.timeout'), 'connect_timeout' => config('api.connect_timeout')]);
                $response = $client->get('newss');
                $responsebody = $response->getBody()->getContents();
                $data = json_decode($responsebody) ?: [];
                $prestasi = collect($data)->where('id_kategori', 10)->all();
            } catch (\Exception $e) {
                \Log::error('UtamaController::prestasi API error: '.$e->getMessage());
                $prestasi = [];
            }
            return view('prestasi', ['prestasi'=>$prestasi]);
        }
        
        // logo
        public function logo()
        {
            $base = config('api.base_url');
            try {
                $client = new Client(['base_uri' => $base, 'timeout' => config('api.timeout'), 'connect_timeout' => config('api.connect_timeout')]);
                $response = $client->get('logosh');
                $responsebody = $response->getBody()->getContents();
                $data = json_decode($responsebody) ?: [];
            } catch (\Exception $e) {
                \Log::error('UtamaController::logo API error: '.$e->getMessage());
                $data = [];
            }
            return view('logo');
        }

}