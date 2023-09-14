<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::paginate(10);
        return view('Admin.Reservation.index',compact('reservations'));

    }

    public function create(){
        return view('Admin.Reservation.create');

    }

    public function show(){

    }

    public function edite(){

    }

    public function destroy(Reservation $reservation){
        $reservation->delete();
    }

    public function update(){

    }

    public function store(Request $request){
        Reservation::create([
                            'first_name'=>$request->first_name,
                            'last_name'=>$request->last_name,
                            'gmail'=>$request->gmail,
                            'tel_number'=>$request->tel_number,
                            'guest_number'=>$request->guest_number,
                            'res_date'=>$request->res_date,
                            'location'=>$request->location,
                        ]);
        //  Reservation::create($request->validated());
    }

}
