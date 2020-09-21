<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use spip;
class SpipController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }

 public function spip(){
    	$spip = DB::table('spip')->orderBy('id','DESC')->get();
        return view('admin.spip', ['spip' => $spip]);

    }


  public function tambah(){
   		return view ('admin/addspip');
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/spip", $name);
            DB::table('spip')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
            return redirect('/admin/spip');

   }

   public function update(Request $request, $id) {
        $spip = \App\spip::where('id', $id)->first();
        if ($request->hasFile('file')) {
            unlink(public_path() . '/public/spip/' . $spip->file);
            $spip = $request->file('file');
            $name    = uniqid()."_".$spip->getClientOriginalName();
            $spip->move(\public_path() . "/public/spip", $name);
            $update    = DB::table('spip')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
             
        } else {
            $update    = DB::table('spip')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/spip');
     }

public function edit($id){

      $spip= DB::table('spip')->find($id);
     return view('/admin/editspip',['spip'=>$spip]);
    }

public function delete($id)
    {
        $spip = DB::table('spip')->where('id',$id)->first();
        File::delete('public/spip/'.$spip->file);

        DB::table('spip')->where('id',$id)->delete();
        return redirect('/admin/spip');
    }


}
