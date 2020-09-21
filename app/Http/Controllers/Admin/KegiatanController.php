<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use kegiatan;
class KegiatanController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }


 public function kegiatan(){
    	$kegiatan = DB::table('kegiatan')
        ->join('opd', 'kegiatan.opd', '=', 'opd.id')
        ->select('kegiatan.id',
                        'kegiatan.judul',
                        'kegiatan.tahun',
                        'kegiatan.file',
                        'opd.opd')->orderBy('kegiatan.id','DESC')->get();
        return view('admin.kegiatan', ['kegiatan' => $kegiatan]);

    }


  public function tambah(){
    $opd = DB::table('opd')->get();
      return view ('admin/addkegiatan', ['opd' => $opd]);
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/kegiatan", $name);
            DB::table('kegiatan')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'opd' => $request->opd,
                'file' => $name]);
            return redirect('/admin/kegiatan');

   }

   public function update(Request $request, $id) {
        $kegiatan = \App\kegiatan::where('id', $id)->first();
        if ($request->hasFile('file')) {
            unlink(public_path() . '/public/kegiatan/' . $kegiatan->file);
            $kegiatan = $request->file('file');
            $name    = uniqid()."_".$kegiatan->getClientOriginalName();
            $kegiatan->move(\public_path() . "/public/kegiatan", $name);
            $update    = DB::table('kegiatan')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'opd' => $request->opd,
                'file' => $name]);
             
        } else {
            $update    = DB::table('kegiatan')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'opd' => $request->opd,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/kegiatan');
     }

public function edit($id){

      $kegiatan= DB::table('kegiatan')->find($id);
     return view('/admin/editkegiatan',['kegiatan'=>$kegiatan]);
    }

public function delete($id)
    {
        $kegiatan = DB::table('kegiatan')->where('id',$id)->first();
        File::delete('public/kegiatan/'.$kegiatan->file);

        DB::table('kegiatan')->where('id',$id)->delete();
        return redirect('/admin/kegiatan');
    }


}
