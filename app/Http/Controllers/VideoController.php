<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use File;

class VideoController extends Controller
{

    
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

public function video(){
        $video = DB::table('video')->orderBy('id','DESC')->get();
        return view('admin/video', ['video' => $video]);
}

public function create(Request $request){
          DB::table('video')->insert([
                    'video' => $request->video
                    ]);
            return redirect('/admin/video');
}

 public function add()
    {
        return view('admin/addvideo');
    }
    
public function edit($id){

      $video= DB::table('video')->find($id);
     return view('/admin/editvideo',['video'=>$video]);
    }


 public function update(Request $request,$id){
      $id = $request->id;
        DB::table('video')
                ->where('id', $id)
                ->update([
                    'video' => $request->video
                ]);
            return redirect('/admin/video');
        }   


 public function delete($id)
    {
        DB::table('video')->where('id',$id)->delete();
        return redirect('/admin/video');
    }

}