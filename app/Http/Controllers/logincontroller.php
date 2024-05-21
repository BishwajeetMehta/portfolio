<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class logincontroller extends Controller
{
    //login function
    public function login(Request $request){
        $user = User::where('email',$request->email)->first();
          if($user){
            if($user->password){
                if(Hash::check($request->password, $user->password)){
                    Auth::login($user);
                    return redirect()->route('ownerarea');
                }
            return redirect()->back();
            }
          return redirect()->back();
        }
    }
    // Logout function
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('admin.login');
        }
        return redirect()->back();
    }

    // Update Password
    public function updatepassword(Request $request){
        $user = User::where('email',$request->email)->first();  
          if($user){
            if($user->password){
                if(Hash::check($request->oldpassword, $user->password)){
                    $data=[
                        'password'=>bcrypt($request->newpassword),
                    ];
                    $user->update($data);
                    return redirect()->route('ownerarea');
                }
            }
            return redirect()->back();
           }
           return redirect()->back();
        

    }

}
