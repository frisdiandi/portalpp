<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use poster;
class PosterController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }


 public function poster(){
    	$poster = DB::table('poster')->orderBy('id','DESC')->get();
        return view('admin.poster', ['poster' => $poster]);

    }


  public function tambah(){
   		return view ('admin/addposter');
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/poster", $name);
            DB::table('poster')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
            return redirect('/admin/poster');

   }

   public function update(Request $request, $id) {
        $poster = \App\poster::where('id', $id)->first();
        if ($request->hasFile('file')) {
            // unlink(public_path() . '/public/poster/' . $poster->file);
            $poster = $request->file('file');
            $name    = uniqid()."_".$poster->getClientOriginalName();
            $poster->move(\public_path() . "/public/poster", $name);
            $update    = DB::table('poster')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
             
        } else {
            $update    = DB::table('poster')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/poster');
     }

public function edit($id){

      $poster= DB::table('poster')->find($id);
     return view('/admin/editposter',['poster'=>$poster]);
    }

public function delete($id)
    {
        $poster = DB::table('poster')->where('id',$id)->first();
        File::delete('public/poster/'.$poster->file);

        DB::table('poster')->where('id',$id)->delete();
        return redirect('/admin/poster');
    }


}
