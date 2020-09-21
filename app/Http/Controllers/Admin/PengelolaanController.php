<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use pengelolaan;
class PengelolaanController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }


 public function pengelolaan(){
    	$pengelolaan = DB::table('pengelolaan')
        ->join('opd', 'pengelolaan.opd', '=', 'opd.id')
        ->select('pengelolaan.id',
                        'pengelolaan.judul',
                        'pengelolaan.tahun',
                        'pengelolaan.file',
                        'opd.skpd')->orderBy('pengelolaan.id','DESC')->get();
        return view('admin.pengelolaan', ['pengelolaan' => $pengelolaan]);
    }


  public function tambah(){
      $opd = DB::table('opd')->get();
      return view ('admin/addpengelolaan', ['opd' => $opd]);
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/pengelolaan", $name);
            DB::table('pengelolaan')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'opd' => $request->opd,
                'kategori' => $request->kategori,
                'file' => $name]);
            return redirect('/admin/pengelolaan');

   }

   public function update(Request $request, $id) {
        $pengelolaan = \App\pengelolaan::where('id', $id)->first();
        if ($request->hasFile('file')) {
            // unlink(public_path() . '/public/pengelolaan/' . $pengelolaan->file);
            $pengelolaan = $request->file('file');
            $name    = uniqid()."_".$pengelolaan->getClientOriginalName();
            $pengelolaan->move(\public_path() . "/public/pengelolaan", $name);
            $update    = DB::table('pengelolaan')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'opd' => $request->opd,
                'kategori' => $request->kategori,
                'file' => $name]);
             
        } else {
            $update    = DB::table('pengelolaan')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'kategori' => $request->kategori,
                'opd' => $request->opd,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/pengelolaan');
     }

public function edit($id){

      $pengelolaan= DB::table('pengelolaan')->find($id);
     return view('/admin/editpengelolaan',['pengelolaan'=>$pengelolaan]);
    }

public function delete($id)
    {
        $pengelolaan = DB::table('pengelolaan')->where('id',$id)->first();
        File::delete('public/pengelolaan/'.$pengelolaan->file);

        DB::table('pengelolaan')->where('id',$id)->delete();
        return redirect('/admin/pengelolaan');
    }


}
