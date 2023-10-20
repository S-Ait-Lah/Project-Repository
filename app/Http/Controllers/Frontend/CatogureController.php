<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Catogure;
use Illuminate\Http\Request;

class CatogureController extends Controller
{
    public function index(){
        $category = Catogure::all();
        return view('Category.index',compact('category'));
    }

    public function show(Catogure $category){
        return view('Category.show',compact('category'));
    }
}
