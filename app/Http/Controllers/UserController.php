<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password, $user->password))
        {
            $req->session()->put('user',$user);
            return redirect('/');
            // return dd(User::where(['email'=>$req->email])->first());
            // return dd("Username or Password is incorrect!");
            // return dd($user);
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
        return $req->input();
        // User::where(['email'=>$req->email])->first();
    }
}
