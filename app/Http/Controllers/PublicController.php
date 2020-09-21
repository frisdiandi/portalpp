<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// use GuzzleHttp\Client;
// use GuzzleHttp\Message\Response;
// use GuzzleHttp\Exception\RequestException;
use App\artikel;
use File;

class PublicController extends Controller

{
  	public function index()
    {
    // $client = new Client();
    // $api_response = $client->get('https://berita.padangpanjang.go.id/api/berita');
    // $res = $api_response->getBody()->getContents();
    // $response = array_slice(json_decode($res, TRUE),0,3);
    $grafis = DB::table('grafis')->orderBy('id','DESC')->get();
        return view('publik', ['grafis' => $grafis]);
    }

   public function kota()
    {
    	$sejarah = DB::table('sejarah')->get();
    	$lambang = DB::table('lambang')->get();
    	$geografis = DB::table('geografis')->get();
    	$visimisi = DB::table('visimisi')->get();
    	return view('/user/kota',['sejarah'=>$sejarah, 'lambang'=>$lambang, 'geografis'=>$geografis, 'visimisi'=>$visimisi]);
    }


   public function transparansi()
    {
      $poster = DB::table('poster')->get();
      $rencana = DB::table('rencana')->get();
      $pengelolaan = DB::table('pengelolaan')->join('opd', 'pengelolaan.opd', '=', 'opd.id')->select('pengelolaan.*','opd.skpd')->orderBy('pengelolaan.id','DESC')->get();
      $akuntabilitas = DB::table('akuntabilitas')->join('opd', 'akuntabilitas.opd', '=', 'opd.id')->select('akuntabilitas.*','opd.skpd')->orderBy('akuntabilitas.id','DESC')->get();
      $kegiatan = DB::table('kegiatan')->get();
      return view('/user/transparansi',['poster'=>$poster, 'rencana'=>$rencana, 'pengelolaan'=>$pengelolaan, 'akuntabilitas'=>$akuntabilitas, 'kegiatan'=>$kegiatan]);
    }

public function grafis()
    {

      $grafis = DB::table('grafis')->paginate('4');
     
      return view('/user/grafis',['grafis'=>$grafis]);
    } 

public function publik()
    {
     
      return view('/user/public');
    } 

public function domain()
    {
     
      return view('/user/domain');
    } 

public function info()
    {
     
      return view('/user/info');
    } 

public function pemerintahan()
    {
      return view('/user/pemerintahan');
    } 

public function bankdata()
    {
      $gap = DB::table('gap')->get();
      $gender = DB::table('gender')->get();
      return view('/user/bankdata',['gap'=>$gap, 'gender'=>$gender]);
    }

public function video()
    {
      $video = DB::table('video')->paginate('3');
      return view('/user/video',['video'=>$video]);
    } 

public function cpnsd()
    {
      $cpnsd = DB::table('cpnsd')->orderBy('id','DESC')->get();
      return view('/user/cpnsd',['cpnsd'=>$cpnsd]);
    } 

public function sakip()
    {
      $bappeda = DB::table('sakip')->where('instansi','d413b447-4097-4af6-8b9d-1279a5893495')->get();
      $bkpsdm  = DB::table('sakip')->where('instansi','376fbea0-a68a-4b4c-a9e8-042485ed2892')->get();  
      $bpbd    = DB::table('sakip')->where('instansi','ba6a319c-bf6e-4a9e-a26e-68e262f8d67c')->get();  
      $bpkd = DB::table('sakip')->where('instansi','c7c05db9-0618-43ac-a767-84c8c864584c')->get();  
      $cabar = DB::table('sakip')->where('instansi','acb6d8c0-e67f-47aa-bb3a-dd164b342acb')->get();  
      $catim = DB::table('sakip')->where('instansi','b4717f26-b680-42c6-9a39-d81e1a1ba1db')->get();  
      $dinsos = DB::table('sakip')->where('instansi','23a4f5c7-badf-4245-87e4-f301a0d324d7')->get();  
      $disdikpora = DB::table('sakip')->where('instansi','07627d72-c264-4728-a489-12b5ae3126bb')->get();  
      $disdukcapil = DB::table('sakip')->where('instansi','72323aaa-23ef-4264-abc7-3df196edc23d')->get();  
      $dishub = DB::table('sakip')->where('instansi','54a2497d-1b95-4224-b1a7-b9794e40f837')->get();  
      $diskominfo = DB::table('sakip')->where('instansi','a1af066c-879a-4c82-ad5f-62a4b98ea115')->get();  
      $dispangtan = DB::table('sakip')->where('instansi','b8e45ab6-a7fa-4147-aba2-fca4df78e444')->get();  
      $dispar = DB::table('sakip')->where('instansi','918b0d49-af11-4d91-8d3a-d763e9c31499')->get();  
      $disperkim = DB::table('sakip')->where('instansi','8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5')->get();  
      $dispupr = DB::table('sakip')->where('instansi','c2645ae2-1805-43cb-96ee-527b2c1be6fe')->get();  
      $dkk = DB::table('sakip')->where('instansi','f348a7c6-c319-4aa4-b65e-841797dad6d0')->get();  
      $dpk = DB::table('sakip')->where('instansi','a233c8e4-5b9f-4596-94d1-16c8aada61fa')->get();  
      $dpkukm = DB::table('sakip')->where('instansi','0c6f7fa3-1c54-43cb-aca2-4fd17602f569')->get();  
      $dpmptsp = DB::table('sakip')->where('instansi','66e44058-535c-4b76-8a83-34cd93855309')->get();  
      $dprd = DB::table('sakip')->where('instansi','61f7c332-b41a-4a96-bff3-07390e0d3c16')->get();  
      $inspektorat = DB::table('sakip')->where('instansi','425a25ff-1628-41f8-bc9e-b37796626922')->get();  
      $kota = DB::table('sakip')->where('instansi','c186138c-0830-4da8-a91a-71c7ab038176')->get();  
      $rsud = DB::table('sakip')->where('instansi','0fc00050-3fcf-437e-8cab-82e1d6c70b12')->get();  
      $polpp = DB::table('sakip')->where('instansi','89ab2e7e-c406-4975-a2eb-befd7d2993f5')->get();  
      $setdako = DB::table('sakip')->where('instansi','e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc')->get();  
          return view('/user/sakip',[
        'bappeda'=>$bappeda,
        'bkpsdm'=>$bkpsdm,
        'bpbd'=>$bpbd,
        'bpkd'=>$bpkd,
        'cabar'=>$cabar,
        'catim'=>$catim,
        'dinsos'=>$dinsos,
        'disdikpora'=>$disdikpora,
        'disdukcapil'=>$disdukcapil,
        'dishub'=>$dishub,
        'diskominfo'=>$diskominfo,
        'dispangtan'=>$dispangtan,
        'dispar'=>$dispar,
        'disperkim'=>$disperkim,
        'dispupr'=>$dispupr,
        'dkk'=>$dkk,        
        'dpk'=>$dpk,
        'dpkukm'=>$dpkukm,
        'dpmptsp'=>$dpmptsp,
        'dprd'=>$dprd,
        'inspektorat'=>$inspektorat,
        'kota'=>$kota,
        'rsud'=>$rsud,
        'polpp'=>$polpp,
        'setdako'=>$setdako,


      ]);
    } 

    public function kontak()
    {
      return view('/user/kontak');
    
    } 

}
