<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;
use PhpParser\Node\Expr\Empty_;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }

    public function post(Request $request){
        $posts=Post::where('type', 'blog')->get();
        $categories=Category::all();
        $route="post";
        if (!empty($request->ct)) {
            $posts=Post::where('type','blog')->where('category_id',$request->ct)->get();
        }
        return view('post', compact('posts','categories','route'));
    }
    
    public function shop(Request $request){
        $products = Product::all();
        $route="shop";
        $categories=Category::all();
        if (!empty($request->ct)) {
            $products=Product::where('category_id',$request->ct)->get();
        }
        return view('shop', compact('products','categories','route'));
    }
    public function content(Request $request){
        $posts=Post::where('type', 'content')->get();
        $route="content";
        $categories=Category::all();
        if (!empty($request->ct)) {
            $posts=Post::where('type','content')->where('category_id',$request->ct)->get();
        }
        return view('post', compact('posts','categories','route'));
    }
    public function gallery(Request $request){
        $products=Gallery::all();
        $route="gallery";
        $categories=Category::all();
        if (!empty($request->ct)) {
            $products=Gallery::where('category_id',$request->ct)->get();
        }
        
        return view('shop', compact('products','categories','route'));
    }    
}
