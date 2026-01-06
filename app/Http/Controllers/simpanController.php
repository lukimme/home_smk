<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;
use GuzzleHttp\Client;

class SimpanController extends Controller
{

    
    //
    public function simpan(Request $req ){
            
        // Set up the cURL request
        $base = config('api.base_url');
        $curl = curl_init();
        curl_setopt_array($curl, [

        // sesuaikan alamat endpoint API
        CURLOPT_URL => rtrim($base, '/') . '/dataPPDB',
        // CURLOPT_URL => 'http://localhost:1234/dataPPDB',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        
        CURLOPT_POSTFIELDS => [
            
            //membuat parameter yang dibutuhkan oleh endpoint (SESUAIKAN DENGAN ENDPOINT API YANG DIBUAT)
           //'nama endpoint API' => 'name pada inputan HTML'
           //inputan data siswa
           'referal'=> $req->referal,
            'email' => $req->email,
            'namaSiswa' => $req->nama,
            'jkSiswa' => $req->jk,
            'jurusanSiswa'=> $req->Jurusan,
            'tmpLahirSiswa' => $req->tl,
            'tglLahirSiswa'  => $req->tgll,
            'agamaSiswa'   => $req->Agama,
            'alamatSiswa' => $req->alamat,
            'rtSiswa'  => $req-> rt,
            'rwSiswa'  => $req-> rw,
            'kotaSiswa'  => $req->kab,
            'kodePosSiswa' => $req->kodepos,
            'noSiswa'   => $req->notelp,
            'anakKeSiswa'   => $req->anakke,
            'saudaraSiswa'  => $req->sdrkandung,
            'tiriSiswa'  => $req->sdrtiri,
            'bahasaSiswa'   => json_encode($req->bhs),
            'asalekolahSSiswa'   => $req->asalsek,
            'tglSttbSiswa'   => $req->tglsttb,
            'noSttbSiswa'   => $req-> nosttb ,
            'lamaSiswa'   => $req->lamabelajar,
            'nisn' => $req->nisn,

            //'nama endpoint API' => 'name pada inputan HTML'
            //inputan data ayah
            'idSiswa' =>$req->nisn,
            'namaAyah' =>$req->namaayah,
            'tlAyah'=>$req->tempatayah,
            'tgllAyah'=>$req->tglayah,
            'hmAyah'=>$req->keadaanayah,
            'wwAyah'=>$req->negaraayah,
            'agamaAyah'=>$req->agamaayah,
            'alamatAyah'=>$req->alamatayah,
            'rtAyah'=>$req->rtayah,
            'rwAyah'=>$req->rwayah,
            'kotaAyah'=>$req->kotaayah,
            'posAyah'=>$req->kodeposayah,
            'noAyah'=>$req->telpayah,
            'ptAyah'=>$req->pendidikanayah,
            'kerjaAyah'=>$req->pekerjaanayah,
            'pengAyah'=>$req->penghasilanayah,            
            
             //'nama endpoint API' => 'name pada inputan HTML'
            //inputan data ibu
          'idSiswaIbu' =>$req->nisn,
          'namaIbu' =>$req->namaibu,
          'tlIbu'=>$req->tempatibu,
          'tgllIbu'=>$req->tglibu,
          'hmIbu'=>$req->keadaanibu,
          'wwIbu'=>$req->negaraibu,
          'agamaIbu'=>$req->agamaibu,
          'alamatIbu'=>$req->alamatibu,
          'rtIbu'=>$req->rtibu,
          'rwIbu'=>$req->rwibu,
          'kotaIbu'=>$req->kotaibu,
          'posIbu'=>$req->kodeposibu,
          'noIbu'=>$req->telpibu,
          'ptIbu'=>$req->pendidikanibu,
          'kerjaIbu'=>$req->pekerjaanibu,
          'pengIbu'=>$req->penghasilanibu,   

          //'nama endpoint API' => 'name pada inputan HTML'
            //inputan data wali
            'idSiswaWali' =>$req->nisn,
            'namaWali' =>$req->namawali,
            'tlwali' =>$req->tempatwali,
            'tglWali' =>$req->tglwali,
            'agamaWali'=>$req->agamawali,
            'hubWali'=>$req->hubunganwali,
            'ptWali'=>$req->pendidikanwali,
            'kerjaWali'=>$req->pekerjaanwali,
            'pengWali'=>$req->penghasilanwali,
            'alamatWali'=>$req->alamatwali,
            
            ],

      
        ]);

        // Mengirim request ke API
        $response = curl_exec($curl);

        //menerima response dari API disimpan dalam bentuk string
        $message = json_decode($response,true)['message'];
        
        // menutup sesi curl
        curl_close($curl);
        
        // jika response dari API sukses
        
       if($message=='ok'){

        $idSaya = json_decode($response,true)['id_users'];
        $NamaSaya= json_decode($response,true)['nama_lengkap'];
             
            return redirect('/getSiswaTerbaru/'.$idSaya.'/'.$NamaSaya)->with('message','ok_baik');
        //var_dump($allData);         
            
       }else{
        return view('formsukses', ['id' => 'sudah ada', 'nama'=> 'sudah ada']);
       } 
    }


    
  public function getTerbaru($id, $nama){
  
    return view('formsukses', ['id' => $id, 'nama'=>$nama]);
    
  }
}