<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use rencana;
class RencanaController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }


 public function rencana(){
    	$rencana = DB::table('rencana')->orderBy('id','DESC')->get();
        return view('admin.rencana', ['rencana' => $rencana]);

    }


  public function tambah(){
   		return view ('admin/addrencana');
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/rencana", $name);
            DB::table('rencana')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'kategori' => $request->kategori,
                'file' => $name]);
            return redirect('/admin/rencana');

   }

   public function update(Request $request, $id) {
        $rencana = \App\rencana::where('id', $id)->first();
        if ($request->hasFile('file')) {
            // unlink(public_path() . '/public/rencana/' . $rencana->file);
            $rencana = $request->file('file');
            $name    = uniqid()."_".$rencana->getClientOriginalName();
            $rencana->move(\public_path() . "/public/rencana", $name);
            $update    = DB::table('rencana')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'tahun' => $request->tahun,
                'file' => $name]);
             
        } else {
            $update    = DB::table('rencana')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'kategori' => $request->kategori,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/rencana');
     }

public function edit($id){

      $rencana= DB::table('rencana')->find($id);
     return view('/admin/editrencana',['rencana'=>$rencana]);
    }

public function delete($id)
    {
        $rencana = DB::table('rencana')->where('id',$id)->first();
        File::delete('public/rencana/'.$rencana->file);

        DB::table('rencana')->where('id',$id)->delete();
        return redirect('/admin/rencana');
    }


}
