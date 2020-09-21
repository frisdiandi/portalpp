<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use gap;
class GapController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }


 public function gap(){
    	$gap = DB::table('gap')->orderBy('id','DESC')->get();
        return view('admin.gap', ['gap' => $gap]);

    }


  public function tambah(){
   		return view ('admin/addgap');
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/gap", $name);
            DB::table('gap')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
            return redirect('/admin/gap');

   }

   public function update(Request $request, $id) {
        $gap = \App\gap::where('id', $id)->first();
        if ($request->hasFile('file')) {
            unlink(public_path() . '/public/gap/' . $gap->file);
            $gap = $request->file('file');
            $name    = uniqid()."_".$gap->getClientOriginalName();
            $gap->move(\public_path() . "/public/gap", $name);
            $update    = DB::table('gap')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
             
        } else {
            $update    = DB::table('gap')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/gap');
     }

public function edit($id){

      $gap= DB::table('gap')->find($id);
     return view('/admin/editgap',['gap'=>$gap]);
    }

public function delete($id)
    {
        $gap = DB::table('gap')->where('id',$id)->first();
        File::delete('public/gap/'.$gap->file);

        DB::table('gap')->where('id',$id)->delete();
        return redirect('/admin/gap');
    }


}
