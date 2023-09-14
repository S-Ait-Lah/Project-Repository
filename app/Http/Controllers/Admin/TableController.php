<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Catogure;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $tables = Table::paginate(10);
        return view('Admin.Table.index',compact('tables'));

    }

    public function create(){
        return view('create');

    }

    public function show(){

    }

    public function edite(){

    }

    public function destroy(Table $table){
        $table->delete();
    }

    public function update(){

    }

    public function store(TableStoreRequest $request){
        Table::create([
                            'name'=>$request->name,
                            'status'=>$request->status,
                            'location'=>$request->location,
                            'guest_number'=>$request->guest_number,
        ]);

    }


}
