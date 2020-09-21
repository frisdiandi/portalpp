<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use sakip;
class SakipController extends Controller
{

  
   public function __construct()
    {
        $this->middleware('auth');
    }

 public function sakip(){
      $sakip = DB::table('sakip')
       ->join('opd', 'sakip.instansi', '=', 'opd.id')
        ->select('sakip.id',
                        'sakip.judul',
                        'sakip.tahun',
                        'sakip.file',
                        'opd.skpd')->orderBy('sakip.id','DESC')->get();
        return view('admin.sakip', ['sakip' => $sakip]);
    }


  public function tambah(){
      $opd = DB::table('opd')->get();
  		return view('admin.addsakip', ['opd' => $opd]);
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/sakip", $name);
            DB::table('sakip')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'instansi' => $request->instansi,
                'file' => $name]);
            return redirect('/admin/sakip');

   }

   public function update(Request $request, $id) {
        $sakip = \App\sakip::where('id', $id)->first();
        if ($request->hasFile('file')) {
            //unlink(public_path() . '/public/sakip/' . $sakip->file);
            $sakip = $request->file('file');
            $name    = uniqid()."_".$sakip->getClientOriginalName();
            $sakip->move(\public_path() . "/public/sakip", $name);
            $update    = DB::table('sakip')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
             
        } else {
            $update    = DB::table('sakip')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/sakip');
     }

public function edit($id){
      $sakip= DB::table('sakip')->find($id);
     return view('/admin/editsakip',['sakip'=>$sakip]);
    }

public function delete($id)
    {
        $sakip = DB::table('sakip')->where('id',$id)->first();
        File::delete('public/sakip/'.$sakip->file);

        DB::table('sakip')->where('id',$id)->delete();
        return redirect('/admin/sakip');
    }


}
