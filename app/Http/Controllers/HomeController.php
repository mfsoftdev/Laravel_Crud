<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function home(){
        $data= DB::table('users')->get();
        return view('welcome',['data'=>$data]);
    }


    function adduser(Request $req){
        $user = DB::table('users')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
        ]);
        return redirect('/');
    }


    function getuser(string $id){
        $user=DB::table('users')->where('id',$id)->get();
        return view('updateuser',['data'=>$user]);
    }

    function updateuser(Request $req , string $id){
        DB::table('users')->where('id',$id)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password
        ]);
        return redirect('/');
    }

    function deleteuser(string $id){
        DB::table('users')->where('id',$id)->delete();
        $data = DB::table('users')->get();
        return view('welcome',['data'=>$data]);
    }
}
