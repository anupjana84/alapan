<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function login(Request $request){
    	$credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $token = Str::random(80);
                Auth::user()->api_token = $token;
                Auth::user()->save();
               // $admin = Auth::user()->isAdmin();
                return response()->json(['token'=>$token,'user'=>Auth::user()], 200);
        }
    // return response()->json(['token'=>"y"], 200);
    }
    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'instname' =>'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:15'
      
        ]);
        
    
        if ($validator->fails()) {
            return response()->json(['success'=>$validator->messages()]);
        }
         $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'institution_name'=>$request->instname,
            'password'=>Hash::make($request->password)
            
        ]);
        if($user){
            return response()->json(['success'=>'Registration Successfull']);
          }
       
    }
     public function verifyEmail(Request $request){
        $request->validate([
            'email' => 'required|unique:users'
        ]);

        return response()->json(['message'=>'Valid Email'], 200);
    }
   

}
