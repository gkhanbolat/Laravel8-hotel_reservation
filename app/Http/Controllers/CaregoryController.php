<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
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
        return view('home.hotel_detail',['data'=>$data,'datalist'=>$datalist]);
    }
    public function addtocart($id){
        echo "Add to cart";
        $data=Hotel::find($id);
        print_r($data);
        exit();
    }


}
