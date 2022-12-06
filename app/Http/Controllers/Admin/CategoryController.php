<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->simplepaginate(9);
        return view('admin.category.manage', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    //delete
    public function destroy($id)
    {
        try {

            $catDelete = Category::find($id);
            $catDelete->delete();
            return redirect()->back()->with(['type' => 'success', 'message' => 'Category Delete success']);
        } catch (Exception $exception) {
            return redirect()->back()->with(['type' => 'danger', 'message' => 'Category Not Delete success']);
        }
    }

    //add category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories',
            'status' => 'required'
        ]);
        try {
            $category = new Category();
            $category->user_id = auth()->id();
            $category->name = $request->name;
            $category->slug = strtolower(str_replace(' ', '-', $request->name));
            $category->status = $request->status;
            $category->save();
            return redirect()->back()->with(['type' => 'success', 'message' => 'Category Add success']);
        } catch (Exception $exception) {
            return redirect()->back()->with(['type' => 'danger', 'message' => $exception->getMessage()]);
        }
    }

    //single row
    public function show($id)
    {
        $category = Category::select('name')->find($id);
        if($category)
        return view('admin.category.view', compact('category'));
        else
            return redirect()->back();
    }

    //edit section
    public function edit($id)
    {
        $category = Category::find($id);
        if ($category)
            return view('admin.category.edit', compact('category'));
        else
            return redirect()->back();
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,id,'.$id,
            'status' => 'required'
        ]);

        try {
            $category = Category::find($id);
            $category->user_id = auth()->id();
            $category->name = $request->name;
            $category->slug = strtolower(str_replace(' ', '-', $request->name));
            $category->status = $request->status;
            $category->save();
            return redirect()->back()->with(['type' => 'success', 'message' => 'Category Update success']);
        } catch (Exception $exception) {
            return redirect()->back()->with(['type' => 'danger', 'message' => $exception->getMessage()]);
        }

    }


}
