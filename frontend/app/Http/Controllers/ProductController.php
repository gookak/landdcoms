<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $categorys = Category::all();
        $products = Product::orderBy('createdate','desc')->paginate(2);
        return view('product.index',compact('products','categorys'));
    }

     public function productDetail($id)
    {
    	$product = Product::find($id);        
    	return view('product.detail',compact('product'));
    }

}
