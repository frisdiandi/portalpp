<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
            return view('admin.home');
        
    }


    public function create(Request $request){

      DB::table('users')->insert([
            'name' => $request['nama'],
            'email' => $request['email'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'level'=>$request['level']
             ]);

        return redirect('/admin/users');
    }

    public function tampil(){
        $user = DB::table('users')->get();
        return view('auth/tampiluser',['user' => $user]);
    }


    public function add(){
        return view('auth/register');
    }


    public function delete($id){

        DB::table('users')->where('id',$id)->delete();
        return redirect('/admin/users');
    }

      public function tambah1(){
        return view('superadmin/users');
    }

    public function tambah2(){
        return view('admin/users');
    }

//change password
     public function showChangePasswordForm(){
        return view('/admin/changepassword');
    }

     public function changepassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Ganti Password Berhasil !");


    }


}
