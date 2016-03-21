<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Blog;
class LandingController extends Controller
{
    public function index()
    {
    	$category = Category::get();
    	$blog = Blog::orderBy('id','DESC')->get();
    	return view('welcome',compact('category','blog'));
    }

    public function kategori($name)
    {
    	$category = Category::get();
    	$categori = Category::where('name','=',$name)->first();
    	$blog = Blog::where('category_id','=',$categori->id)->get();
    	return view('kategori',compact('category','blog','categori'));
    }

    public function view($judul)
    {
    	$blog = Blog::where('title','=',$judul)->first();
    	return view('view',compact('blog')); 
    }
}

