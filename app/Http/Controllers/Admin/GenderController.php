<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;
use gender;
class GenderController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }


 public function gender(){
    	$gender = DB::table('gender')->orderBy('id','DESC')->get();
        return view('admin.gender', ['gender' => $gender]);

    }


  public function tambah(){
   		return view ('admin/addgender');
   }

  public function create(Request $request){
           $dokumen = $request->file('file');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/gender", $name);
            DB::table('gender')->insert([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
            return redirect('/admin/gender');

   }

   public function update(Request $request, $id) {
        $gender = \App\gender::where('id', $id)->first();
        if ($request->hasFile('file')) {
            unlink(public_path() . '/public/gender/' . $gender->file);
            $gender = $request->file('file');
            $name    = uniqid()."_".$gender->getClientOriginalName();
            $gender->move(\public_path() . "/public/gender", $name);
            $update    = DB::table('gender')  
                ->where('id', $id)
                ->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'file' => $name]);
             
        } else {
            $update    = DB::table('gender')  
                ->where('id', $id)
                ->update([
                'judul'   => $request->judul,
                'tahun' => $request->tahun
              ]);
        }
        return redirect ('/admin/gender');
     }

public function edit($id){

      $gender= DB::table('gender')->find($id);
     return view('/admin/editgender',['gender'=>$gender]);
    }

public function delete($id)
    {
        $gender = DB::table('gender')->where('id',$id)->first();
        File::delete('public/gender/'.$gender->file);

        DB::table('gender')->where('id',$id)->delete();
        return redirect('/admin/gender');
    }


}
