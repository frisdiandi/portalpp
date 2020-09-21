<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use grafis;
class GrafisController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }


 public function grafis(){
    	$grafis = DB::table('grafis')->orderBy('id','DESC')->get();
        return view('admin.grafis', ['grafis' => $grafis]);

    }


  public function tambah(){
   		return view ('admin/addgrafis');
   }

  public function create(Request $request){
           $dokumen = $request->file('gambar');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/grafis", $name);
            DB::table('grafis')->insert([
                'desc' => $request->desc,
                'gambar' => $name]);
            return redirect('/admin/grafis');

   }

   public function update(Request $request, $id) {
        $grafis = \App\grafis::where('id', $id)->first();
        if ($request->hasFile('gambar')) {
            unlink(public_path() . '/public/grafis/' . $grafis->gambar);
            $grafis = $request->file('gambar');
            $name    = uniqid()."_".$grafis->getClientOriginalName();
            $grafis->move(\public_path() . "/public/grafis", $name);
            $update    = DB::table('grafis')  
                ->where('id', $id)
                ->update([
                'desc' => $request->desc,
                'gambar' => $name]);
             
        } else {
            $update    = DB::table('grafis')  
                ->where('id', $id)
                ->update([
                'desc'   => $request->desc
              ]);
        }
        return redirect ('/admin/grafis');
     }

public function edit($id){

      $grafis= DB::table('grafis')->find($id);
     return view('/admin/editgrafis',['grafis'=>$grafis]);
    }

public function delete($id)
    {
        $grafis = DB::table('grafis')->where('id',$id)->first();
        File::delete('public/grafis/'.$grafis->file);

        DB::table('grafis')->where('id',$id)->delete();
        return redirect('/admin/grafis');
    }


}
