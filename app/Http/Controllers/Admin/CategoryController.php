<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::simplepaginate(9);
        return view('admin.category.manage',compact('categories'));
    }
    public function create()
    {
        return 'ok';
    }
    //delete
    public function destroy($id)
    {
        $catDelete = Category::find($id);
        $catDelete->delete();
        return redirect()->back()->with(['type'=>'success','message'=>'Category delte success']);
    }
}
