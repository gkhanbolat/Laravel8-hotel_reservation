<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public static function getsetting(){
        return Setting::first();
    }


    public function index(){
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function aboutus(){

        return view('home.about');
    }
    public function references(){

        return view('home.references');
    }
    public function faq(){
        return view('home.faq');
    }
    public function contact(){
        return view('home.contact');
    }

    public function sendmessage(Request $request){
        $data=New Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect(route('contact'))->with('success','Mesajınız kaydedilmiştir. Teşekkür ederiz.');
    }


    public function login(){
        return route('login');
    }

    public function logincheck(Request $request){
        if ($request->isMethod('post')){
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('/');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        }
        else{
            return view('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }

    public function test($id){
        echo 'id number: ',$id;
    }
}
