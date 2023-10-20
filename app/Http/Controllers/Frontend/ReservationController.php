<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function step_one(Request $request){
        $reservation= $request->session()->get('reservation');
        return view('Reservation.step-one',compact('reservation'));
    }

    public function step_tow(Request $request,){

        $validate=$request->validate([
            'first_name'=>'required',   
            'last_name'=>'required',
            'gmail'=>'required',
            'tel_number'=>'required',
            'res_date'=>'required',
            'guest_number'=>'required',
            'location'=>'required',     
          ]);
        if(empty($request->session()->get('reservation'))){
            $reservation= new Reservation();
            $reservation->fill($validate); 
            $request->session()->put('key',$reservation);
        }else{
            $reservation= $request->session()->get('reservation');
            $reservation->fill($validate);
            $request->session()->put('key',$reservation);
        }
        $tables= Table::where('status','darft')->get();
        return view('Reservation.step-tow',compact(['tables','reservation']));
    }

    public function store(Request $request){
        $validate= $request->validate([
            'table_id'=>'required'
        ]);

        $reservation= $request->session()->get('key');
        $reservation->fill($validate);
        $reservation->save();
        return redirect('/reservation/step-one');
    }
}