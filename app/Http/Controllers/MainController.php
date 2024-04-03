<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profile as pr;

class MainController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function ProfilePage($anggota){
        //DB::table('profile')
        $data = pr::where('username', $anggota)
        ->first();

        // print_r($data);
        return view('profile')->with('data',$data);
    }

    public function HomePage(){
        $data = DB::table('profiles')
        ->get();
        return view('bio_kel')->with('data',$data);
    }

        // public function ProfilePage($anggota){
        //     // echo $username;
        //     return view($anggota);
        // }
}
