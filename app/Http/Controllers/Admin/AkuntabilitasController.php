<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use akuntabilitas;
class AkuntabilitasController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }


 public function akuntabilitas(){
      $akuntabilitas = DB::table('akuntabilitas')
       ->join('opd', 'akuntabilitas.opd', '=', 'opd.id')
        ->select('akuntabilitas.id',
                        'akuntabilitas.judul',
                        'akuntabilitas.tahun',
                        'akuntabilitas.file',
                        'opd.skpd')->orderBy('akuntabilitas.id','DESC')->get();
        return view('admin.akuntabilitas', ['akuntabilitas' => $akuntabilitas]);
    }


  public function tambah(){
      $opd = DB::table('opd')->get();
  		return view('admin.addakuntabilitas', ['opd' => $opd]);
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/akuntabilitas", $name);
            DB::table('akuntabilitas')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'opd' => $request->opd,
                'file' => $name]);
            return redirect('/admin/akuntabilitas');

   }

   public function update(Request $request, $id) {
        $akuntabilitas = \App\akuntabilitas::where('id', $id)->first();
        if ($request->hasFile('file')) {
            unlink(public_path() . '/public/akuntabilitas/' . $akuntabilitas->file);
            $akuntabilitas = $request->file('file');
            $name    = uniqid()."_".$akuntabilitas->getClientOriginalName();
            $akuntabilitas->move(\public_path() . "/public/akuntabilitas", $name);
            $update    = DB::table('akuntabilitas')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'opd' => $request->opd,
                'file' => $name]);
             
        } else {
            $update    = DB::table('akuntabilitas')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'opd' => $request->opd,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/akuntabilitas');
     }

public function edit($id){
      $akuntabilitas= DB::table('akuntabilitas')->find($id);
     return view('/admin/editakuntabilitas',['akuntabilitas'=>$akuntabilitas]);
    }

public function delete($id)
    {
        $akuntabilitas = DB::table('akuntabilitas')->where('id',$id)->first();
        File::delete('public/akuntabilitas/'.$akuntabilitas->file);

        DB::table('akuntabilitas')->where('id',$id)->delete();
        return redirect('/admin/akuntabilitas');
    }


}
