<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class UserController extends Controller
{
    //
    function index(){
        return view('index');
    }


    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        //if(!$user || !Hash::check($req->password, $user->password)){
        if(!$user){
            return redirect('/login');
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }


    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }

    function logout () {
        //delete the user session
        Session::forget('user');
        return redirect('login');
    }
}
