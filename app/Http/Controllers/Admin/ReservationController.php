<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::paginate(10);
        return view('Admin.Reservation.index',compact('reservations'));

    }

    public function create(){
        $tables=Table::where('status','darft')->get();
        return view('Admin.Reservation.create',compact('tables'));

    }

    public function show(){

    }

    public function edit(Reservation $reservation){
        return view('Admin.Reservation.edite',compact('reservation'));
    }

    public function destroy(Reservation $reservation){
        $reservation->delete();
        return redirect('/admin/reservations');
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
                            'table_id'=>$request->table_id,
                        ]);
        //  Reservation::create($request->validated());
        return redirect('/admin/reservations');

    }


}
