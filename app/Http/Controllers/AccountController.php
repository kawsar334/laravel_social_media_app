<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class AccountController extends Controller
{
    //

    public function Home(){
        return view('front.home');
    }

    // show registration form
    public  function registration (){
        return view('front.register');
    }
    // show login form
    public  function login()
    {
        return view('front.login');
    }
    // show profile page
    public  function profile()
    {
        return view('front.profile');
    }

    // retgistration 

    public function Register(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
          return  redirect()->route('account.login')->with('success', 'Registration succesfully');
        }  
    }

    public function loginuser(Request $request){
        $credintials = $request->only('email','password');
         $validator = Validator::make($credintials,[
            'email'=>"required|string|email",
            'password'=>"required|string",
         ]);
         if($validator->fails()){
            return redirect()->route('account.login')->withErrors($validator)->withInput();
         }
         if(Auth::attempt($credintials)){
            return redirect()->route('home')->with('success','Login successful');
         }else{

             return redirect()->route('account.login')->withErrors(['email'=>'email or password wrong !']);
         }
        dd($validator);
       
    }
    // logout function 
    public function Logout(Request $request){
        Auth::logout();
        return redirect()->route('account.login');
    }

    // get profile data 
    public function getProfileData ($id){

        $user = User::where(['id'=> $id])->first();
        if(!$user){
            return 'user not found ! ';
        }else{
        return view('front.profile');
        }
    }

    // 

}
