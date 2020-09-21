<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use cpnsd;
class CpnsdController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }


 public function cpnsd(){
    	$cpnsd = DB::table('cpnsd')->orderBy('id','DESC')->get();
        return view('admin.cpnsd', ['cpnsd' => $cpnsd]);

    }


  public function tambah(){
   		return view ('admin/addcpnsd');
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/cpnsd", $name);
            DB::table('cpnsd')->insert([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'file' => $name]);
            return redirect('/admin/cpnsd');

   }

   public function update(Request $request, $id) {
        $cpnsd = \App\cpnsd::where('id', $id)->first();
        if ($request->hasFile('file')) {
            // unlink(public_path() . '/public/cpnsd/' . $cpnsd->file);
            $cpnsd = $request->file('file');
            $name    = uniqid()."_".$cpnsd->getClientOriginalName();
            $cpnsd->move(\public_path() . "/public/cpnsd", $name);
            $update    = DB::table('cpnsd')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'file' => $name]);
             
        } else {
            $update    = DB::table('cpnsd')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'tanggal' => $request->tanggal
              ]);
        }
        return redirect ('/admin/cpnsd');
     }

public function edit($id){

      $cpnsd= DB::table('cpnsd')->find($id);
     return view('/admin/editcpnsd',['cpnsd'=>$cpnsd]);
    }

public function delete($id)
    {
        $cpnsd = DB::table('cpnsd')->where('id',$id)->first();
        File::delete('public/cpnsd/'.$cpnsd->file);

        DB::table('cpnsd')->where('id',$id)->delete();
        return redirect('/admin/cpnsd');
    }


}
