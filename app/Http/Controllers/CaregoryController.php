<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Review;
use Illuminate\Http\Request;

class CaregoryController extends Controller
{

    public function categoryhotel($id,$slug){

        $datalist=Hotel::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_hotel',['data'=>$data,'datalist'=>$datalist]);
    }

    public function hotel($id,$slug){
        $data=Hotel::find($id);
        $datalist=Image::where('hotel_id',$id)->get();
        $reviews=Review::where('hotel_id',$id)->get();
        return view('home.hotel_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }
    public function addtocart($id){
        echo "Add to cart";
        $data=Hotel::find($id);
        print_r($data);
        exit();
    }

    public function gethotel(Request $request){
        $search=$request->input('search');
        $count=Hotel::where('title','like','%'.$search.'%')->get()->count();
        if($count==1){
            $data=Hotel::where('title','like','%'.$search.'%')->first();
            return redirect()->route('hotel',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else{
            return redirect()->route('hotellist',['search'=>$search]);
        }
    }
    public function hotellist($search){
        $datalist=Hotel::where('title','like','%'.$search.'%')->get();
        return view('home.search_hotel',['search'=>$search,'datalist'=>$datalist]);
    }


}
