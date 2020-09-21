<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;

class KotaController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }


public function sejarah(){
      $sejarah=DB::table('sejarah')->find('1');
     return view('/admin/sejarah',['sejarah'=>$sejarah]);
    }

  
public function updatesejarah(Request $request, $id){
        DB::table('sejarah')
                ->where('id', $id)
                ->update([
                    'sejarah' => $request->sejarah

                ]);
        return redirect('/admin/sejarah');
     }  

public function lambang(){
      $lambang=DB::table('lambang')->find('1');
     return view('/admin/lambang',['lambang'=>$lambang]);
    }

  
public function updatelambang(Request $request, $id){
        DB::table('lambang')
                ->where('id', $id)
                ->update([
                    'lambang' => $request->lambang

                ]);
        return redirect('/admin/lambang');
     }  

public function geografis(){
      $geografis=DB::table('geografis')->find('1');
     return view('/admin/geografis',['geografis'=>$geografis]);
    }

  
public function updategeografis(Request $request, $id){
        DB::table('geografis')
                ->where('id', $id)
                ->update([
                    'geografis' => $request->geografis

                ]);
        return redirect('/admin/geografis');
     }  


public function visimisi(){
      $visimisi=DB::table('visimisi')->find('1');
     return view('/admin/visimisi',['visimisi'=>$visimisi]);
    }

  
public function updatevisimisi(Request $request, $id){
        DB::table('visimisi')
                ->where('id', $id)
                ->update([
                    'visimisi' => $request->visimisi

                ]);
        return redirect('/admin/visimisi');
     }  


}
