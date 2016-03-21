<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Category;
class BlogController extends Controller
{
    public function index(){

    	$blog = Blog::get();

    	return view('blog.blog-index',compact('blog'));

    }

    public function create(){

        $category = Category::lists('name','id'); 

        return view('blog.blog-create',compact('category'));
    }

    public function store(BlogRequest $request){

        $input = $request->all();

        Blog::create($input);

        return redirect()->route('blog-index');
    }

    public function edit($id){

        $blog = Blog::findOrfail($id);

        $category = Category::lists('name','id'); 
        
        return view('blog.blog-edit',compact('blog','category'));
    }

    public function update($id, BlogRequest $request){

        $blog = Blog::findOrFail($id);

        $input = $request->all();

        $blog->update($input);

        return redirect()->route('blog-index');
    }

    public function destroy($id)
    {

        $blog = Blog::findOrfail($id);

        $blog->delete();

        return redirect()->route('blog-index');
    }
}
