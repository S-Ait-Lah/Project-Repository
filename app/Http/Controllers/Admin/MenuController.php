<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Models\Catogure;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(){

        $menus = Menu::paginate(10);
        return view('Admin.Menu.index',compact('menus'));

    }
    public function create(){
        $categories=Catogure::all();
        return view('Admin.Menu.create',compact('categories'));
    }
    public function show(){

    }

    public function update(Request $request,Menu $menu){

        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
            'catogure_id'=>'required'
        ]);
        $image = $menu->image;
        if($request->hasFile('image')){
            Storage::delete($menu->image);
            $image=$request->file('image')->store('public/menu');
        }
        $menu->update([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
            'catogure_id'=>$request->catogure_id,
        ]);
        return redirect('admin/menus');
    }

    public function destroy(Menu $menu){
        $menu->delete();
        return redirect('/admin/menus');

    }

    public function edit(Menu $menu){
        $categories=Catogure::all();
        return view('Admin.Menu.edite',compact(['menu','categories']));
    }

    public function store(MenuStoreRequest $request){
        $file=$request->file("image")->store('public/menu');

        Menu::create([
                        'name'=>$request->name,
                        'image'=>$file,
                        'description'=>$request->description,
                        'catogure_id'=>$request->catogure_id
                ]);

        return redirect('/admin/menus');

        // Menu::create($request->except('_token'));
    }
}
