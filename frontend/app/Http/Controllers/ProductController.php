<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {

        // $search = \Request::get('category');
        // $search_category = \Request::get('category');

        $name = $request->input('name');
        $categoryId = $request->input('category_id')? $request->input('category_id') : 1;
        // $categoryId = $request->input('category_id');
        $price_min = $request->input('price_min');
        $price_max = $request->input('price_max');


        $category_list = Category::all();
        $category = Category::find($request->input('category_id'));
        $tbl_product = DB::table('product');


        if ($name) {
            $tbl_product = $tbl_product->where('name', 'like', '%' . $name . '%');
        }

        if ($categoryId) {
            $tbl_product = $tbl_product->where('category_id', 'like', $categoryId);
        }else{
            $tbl_product = $tbl_product->where('category_id', 'like', $categoryId);
        }

        if ($price_min || $price_max) {
            $tbl_product = $tbl_product->whereBetween('price', [$price_min, $price_max]);
        }

        $category_list = Category::all();
        $category_current = Category::find($categoryId);
        $products = $tbl_product->orderBy('created_at','desc')->paginate(2);

        // if ($request->all()) {
        //     $products = Product::where('name', 'like', '%' . $request->input('name') . '%')
        //     ->where('category_id', 'like', $request->input('category_id'))
        //     ->whereBetween('price', [$request->input('price_min'), $request->input('price_max')])
        //     ->orderBy('created_at','desc')
        //     ->paginate(2);
        // }else{
        //     $products = $tbl_product->orderBy('created_at','desc')->paginate(2);
        // }




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
        return view('product.index',compact('products','category_list','category_current'));
    }

    // public function searchCategory($id)
    // {
    //     $categorys = Category::all();
    //     $products = Product::where('category_id', 'like', $id)->orderBy('created_at','desc')->paginate(2);
    //     return view('product.index',compact('products','categorys'));
    // }

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
