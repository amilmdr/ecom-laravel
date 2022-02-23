<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    function login(Request $req){
       $user=User::Where(['email'=>$req->email])->first();
        if(!$user|| !Hash::check($req->password,$user->password))
       {
        return "Username and password is not matched";

       }
       else{
           $req->session()->put('user',$user);
         return redirect('/');
       }
      }
    function register(Request $req){
      //instance of user
      //validation rules
      $req->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
      ]);
      $user=new User;
      $user->name=$req->name;
      $user->email=$req->email;
      $user->password=HASH::make($req->password);
      $user->save();
      return redirect('/login');
    }
}
