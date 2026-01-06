<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function sea(Request $request){
        dd($request);
    }
    
    public function berita()
    {
        $base = config('api.base_url');
        $timeout = config('api.timeout');
        $connect = config('api.connect_timeout');

        try {
            $client = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
            $response = $client->get('newss');
            $responsebody = $response->getBody()->getContents();
            $data = json_decode($responsebody) ?: [];

            $client1 = new Client(['base_uri' => $base, 'timeout' => $timeout, 'connect_timeout' => $connect]);
            $response1 = $client1->get('newsss');
            $responsebody1 = $response1->getBody()->getContents();
            $arr1 = json_decode($responsebody1) ?: [];
            $data1 = $arr1[0] ?? null;
            $data2 = $arr1[1] ?? null;

            $collection = collect($data);
            $prestasi = collect($data)->where('id_kategori', 10)->all();
            $pengumuman = collect($data)->where('id_kategori', 2)->all();
            $berita = collect($data)->where('id_kategori', 1)->all();
            $informasi = collect($data)->where('id_kategori', 9)->all();
            $trend = $collection->sortByDesc('views')->take(3);
            $terbaru = $collection->sortByDesc('id')->take(5);
            $jurusan = collect($data)->whereIn('id_kategori', [3, 4, 5, 6, 7, 8])->all();

            return view('blog',['data'=>$data, 'data1'=>$data1, 'data2'=>$data2, 'prestasi'=>$prestasi, 'pengumuman'=>$pengumuman, 'berita'=>$berita, 'informasi'=>$informasi,'jurusan'=>$jurusan, 'trending'=>$trend, 'terbaru'=>$terbaru]);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            \Log::error('BeritaController::berita API error: '.$e->getMessage());
            // fallback: render view with empty data and an error flag
            return view('blog', ['data'=>[], 'data1'=>null, 'data2'=>null, 'prestasi'=>[], 'pengumuman'=>[], 'berita'=>[], 'informasi'=>[], 'jurusan'=>[], 'trending'=>collect([]), 'terbaru'=>collect([]), 'api_error'=>true]);
        }
    }

    public function isiberita($url)
    {
        $client = new Client();
        try {
            $response = $client->get('https://api.smkbudimuliapakisaji.sch.id/news/'.$url);
            // $response = $client->get('http://127.0.0.1:8000/api/news/'.$url);
            $responsebody = $response->getBody()->getContents();
            $decoded = json_decode($responsebody);

            if (empty($decoded) || !is_array($decoded) || count($decoded) < 3) {
                \Log::warning('Unexpected API response for news/'.$url, ['body' => $responsebody]);
                abort(404);
            }

            $data  = $decoded[0];
            $data1 = $decoded[1];
            $data2 = $decoded[2];

            return view('blog2',['data'=>$data,'data1'=>$data1, 'data2'=>$data2]);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            \Log::error('API request failed for news/'.$url.' - '.$e->getMessage());
            abort(502, 'Upstream API error');
        } catch (\Exception $e) {
            \Log::error('Unexpected error in isiberita: '.$e->getMessage());
            abort(500);
        }
    }

    // guru

    public function guru()
    {
        $base = config('api.base_url');
        $client = new Client(['base_uri' => $base, 'timeout' => config('api.timeout'), 'connect_timeout' => config('api.connect_timeout')]);
        try {
            $response = $client->get('guru');
            $responsebody = $response->getBody()->getContents();
            $data = json_decode($responsebody) ?: [];
        } catch (\Exception $e) {
            \Log::error('BeritaController::guru API error: '.$e->getMessage());
            $data = [];
        }
        return view('guru',['data'=>$data]);
    }
    public function detail($url)
    {
        $base = config('api.base_url');
        $client = new Client(['base_uri' => $base, 'timeout' => config('api.timeout'), 'connect_timeout' => config('api.connect_timeout')]);
        try {
            $response = $client->get('show-guru/'.$url);
            $responsebody = $response->getBody()->getContents();
            $data = json_decode($responsebody) ?: [];
        } catch (\Exception $e) {
            \Log::error('BeritaController::detail API error: '.$e->getMessage());
            $data = [];
        }
        return view('guru2',['data'=>$data]);
    }
    
    
    

}