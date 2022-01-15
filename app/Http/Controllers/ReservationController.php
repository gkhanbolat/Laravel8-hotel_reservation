<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Reservation::where('user_id',Auth::id())->get();
        return view('home.user_rezervations',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $data=Hotel::find($id);
        $adults=$request->input('adults');
        $children=$request->input('children');
        $checkin=$request->input('checkin');
        $days=$request->input('days');
        $checkout=$request->input('checkout');
        $room=$request->input('room');
        $roomlist=Room::find($room);
        $datalist=Reservation::all();
        $title=$request->input('title');
        return view('home.reservation',['datalist'=>$datalist,'title'=>$title,'data'=>$data,'adults'=>$adults,'checkout'=>$checkout,'checkin'=>$checkin,'children'=>$children,'room'=>$room,'roomlist'=>$roomlist,'days'=>$days]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$hotel_id,$room_id)
    {
        $data=new Reservation;
        $data->user_id=Auth::id();
        $data->hotel_id=$hotel_id;
        $data->room_id=$room_id;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->check_in=$request->input('checkin');
        $data->check_out=$request->input('checkout');
        $data->total=$request->input('total');
        $data->days=$request->input('days');
        $data->adults=$request->input('adults');
        $data->children=$request->input('children');
        $data->note=$request->input('note');
        $data->IP=$_SERVER['REMOTE_ADDR'];
        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
