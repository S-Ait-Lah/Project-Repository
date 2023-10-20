<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatogureStoreRequest;
use App\Models\Catogure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CatogureController extends Controller
{
    public function index(){
        $catogures = Catogure::paginate(10);
        return view('Admin.Catogure.index',compact('catogures'));
    }
    public function create(){
        return view('Admin.Catogure.create');
    }
    public function store(CatogureStoreRequest $request){
        $image=$request->file("image")->store('public/catogures');
        Catogure::create([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
        ]);
        return redirect('/admin/catogures');
    }
    public function edit(Catogure $catogure){

        return view('Admin.Catogure.edite',compact(['catogure']));
    } 
    public function destroy(Catogure $catogure){
        $catogure->delete();
        return redirect('/admin/catogures');
    }
    public function update(Request $request,Catogure $catogure){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $image = $catogure->image;
        if($request->hasFile('image')){
            Storage::delete($catogure->image);
            $image=$request->file('image')->store('public/catogures');
        } 
        $catogure->update([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
        ]);
        return redirect('admin/catogures');
    }
    public function show(){
    }
}