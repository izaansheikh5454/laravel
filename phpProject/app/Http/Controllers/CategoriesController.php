<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    //INSERT
    function AddCategory(Request $request) {
        $catObject = new Categories();
        $catObject->name=$request->cname;
        $catImage = time ().".".$request->cimage->extension();
        $request->cimage->move(public_path("assets/img/categories"),$catImage);
        $catObject->image= $catImage;
        $catObject->save();
// dd($request);
        return back()->with("category", "add category");
    }
    function viewDetail(){
        $allcat=categories::all();
    return view ("panel.viewcat",compact("allcat"));
}
}



