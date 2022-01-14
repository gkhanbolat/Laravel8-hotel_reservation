<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($hotel_id)
    {
        $datalist=Hotel::select('id','title')->get();
        $room = DB::table('rooms')->where('hotel_id','=',$hotel_id)->get();
        return view('admin.room',['room'=>$room,'datalist'=>$datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hotel_id)
    {
        $datalist=Hotel::find($hotel_id);
        return view('admin.room_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$hotel_id)
    {
        $data = new Room;
        $data->title=$request->input('title');
        $data->hotel_id=$hotel_id;
        $data->description=$request->input('description');
        $data->price=$request->input('price');
        $data->adet=$request->input('adet');
        $data->type=$request->input('type');
        $data->status=$request->input('status');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_rooms',['hotel_id'=>$hotel_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room,$id)
    {
        $data = Room::find($id);
        return view('admin.room_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room,$hotel_id,$id)
    {
        $data=Room::find($id);
        $data->hotel_id=$hotel_id;
        $data->title=$request->input('title');
        $data->description=$request->input('description');
        $data->price=$request->input('price');
        $data->adet=$request->input('adet');
        $data->type=$request->input('type');
        $data->status=$request->input('status');
        if($request->file('image')!=null){
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_rooms',['id'=>$id,'hotel_id'=>$hotel_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room,$id)
    {
        $hotel_id=Hotel::first();
        $data=Room::find($id);
        $data->delete();
        return redirect()->route('admin_rooms',['hotel_id'=>$hotel_id]);
    }
}
