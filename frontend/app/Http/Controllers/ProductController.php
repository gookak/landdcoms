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

    public function index(Request $request )
    {

        // $search = \Request::get('search');
        // $search_category = \Request::get('category');

        $categorys = Category::all();

        if ($request->all() != '') {
            $products = Product::where('name', 'like', '%' . $request->input('name') . '%')
            ->where('category_id', 'like', '%' . $request->input('category_id') . '%')
            ->whereBetween('price', [$request->input('price_min'), $request->input('price_max')])
            ->orderBy('createdate','desc')
            ->paginate(2);
        }else{
            $products = Product::orderBy('createdate','desc')->paginate(2);
        }



        // $search = $request->input('search');
        // $search_category = $request->input('category');


        // if ($search != '') {
        //     $products = Product::where('name', 'like', '%' . $search . '%')->orderBy('createdate','desc')->paginate(2);
        // }elseif($search_category !=''){
        //     $products = Product::where('category_id', 'like', '%' . $search_category . '%')->orderBy('createdate','desc')->paginate(2);
        // }else{
        //     $products = Product::orderBy('createdate','desc')->paginate(2);
        // }
        // $categorys = Category::all();
        return view('product.index',compact('products','categorys'));
    }

    public function searchCategory($id)
    {
        $categorys = Category::all();
        $products = Product::where('category_id', 'like', '%' . $id . '%')->orderBy('createdate','desc')->paginate(2);
        return view('product.index',compact('products','categorys'));
    }

    // public function search(Request $request)
    // {
    //     $search = \Request::get('search');
    //     $categorys = Category::all();
    //     $products = Product::where('name', 'like', '%' . $search . '%')->orderBy('createdate','desc')->paginate(2);
    //     return view('product.index',compact('products','categorys'));
    // }

    public function productDetail($id)
    {
    	$product = Product::find($id);        
    	return view('product.detail',compact('product'));
    }

}
