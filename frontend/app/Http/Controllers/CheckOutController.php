<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Cookie\CookieJar;
use App\Http\Requests;
use DB;

class CheckoutController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
        return view('checkout.index');
    }
}
