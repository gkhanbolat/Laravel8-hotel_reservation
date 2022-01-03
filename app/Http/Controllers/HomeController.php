<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
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
    public static function category (){
        return Category::first();
    }
    public static function gethotel(){
        return Hotel::select('title','image','id','category_id')->get();
    }
    public static function categorized(){
        return Hotel::where('category_id',)->get();
    }
    public static function slider(){
        return Hotel::select('title','image','id','slug')->limit(4)->get();
    }
    public static function popular(){
        return Hotel::select('title','image','id','descriptions')->limit(4)->inRandomOrder()->get();
    }




    public function index(){
        $setting = Setting::first();
        $slider = Hotel::select('title','image')->limit(4)->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'
        ];
        return view('home.index',['setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryhotel($id,$slug){

        $datalist=Hotel::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_hotel',['data'=>$data,'datalist'=>$datalist]);
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
