<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
class Users extends Controller
{
   public  function list (){
    $user=User::all();

        return view('userlist',['user'=>$user]);

    }
    public  function create (){
        return view('create');

    }
    public function submitaction ( Request $request ){

         User::select('*')->where([
            ['email','=',$request->email]
        ])->get();
        $request->session()->put('logData',[$request->input()]);
        return redirect('/list');
    }
    public function createsubmit(Request $request){
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $result=$user->save();
        if($result){
            $request->session()->put('logData',[$request->input()]);
            return redirect('/');
        }

    }

}
