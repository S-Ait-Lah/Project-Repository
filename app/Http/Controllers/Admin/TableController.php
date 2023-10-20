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
        return view('Admin.Table.create');

    }

    public function show(){

    }

    public function edit(Table $table){
        return view('Admin.Table.edite',compact('table'));
    }

    public function destroy(Table $table){
        $table->delete();
        return redirect('admin/tables');
    }

    public function update(Request $request,Table $table){
        $this->validate($request,[
            'name'=>'required',
            'guest_number'=>'required',
            'status'=>'required',
            'location'=>'required',
        ]);
        $table->update([
            'name'=>$request->name,
            'guest_number'=>$request->guest_number,
            'status'=>$request->status,
            'location'=>$request->location,
        ]);
        return redirect('admin/tables');

    }

    public function store(TableStoreRequest $request){
        Table::create([
                            'name'=>$request->name,
                            'status'=>$request->status,
                            'location'=>$request->location,
                            'guest_number'=>$request->guest_number,
        ]);

        return redirect('admin/tables');

    }


}
