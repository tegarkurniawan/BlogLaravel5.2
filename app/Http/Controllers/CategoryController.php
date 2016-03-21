<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    public function index(){

    	$category = Category::get();

        return view('category.category-index',compact('category'));

    }

    public function create(){

        return view('category.category-create');

    }

    public function store(CategoryRequest $request){

        $input = $request->all();

        Category::create($input);

        return redirect()->route('category-index');
    }

    public function edit($id){

        $category = Category::findOrFail($id);
        return view('category.category-edit',compact('category','id'));
    }

    public function update($id, CategoryRequest $request)
    {

        $category = Category::findOrFail($id);

        $input = $request->all();

        $category->update($input);

        return redirect()->route('category-index');

    }

    public function destroy($id)
    {
    	$category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('category-index');
    }
}
