<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at','desc')->get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $header_text = 'เพิ่มข้อมูลสินค้า';
        $mode = 'create';
        $form_action = '/product';
        return view('product.form', compact('product', 'header_text', 'mode', 'form_action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //dd($request->all());
        DB::beginTransaction();
        try{

            $p = Product::create([
                'category_id' => $request->input('category_id'),
                'code' => $this->GeraHash(15),
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'balance' => $request->input('balance'),
                'detail' => $request->input('detail')
                ]);

            $i=1;
            foreach ($request->images as $image) {
                //$filename = $image->store('public');
                $filename = Storage::put('public', $image);
                $pi = ProductImage::create([
                    'product_id' => $p->id,
                    'filename' => $image->hashName(),
                    'sort' => $i
                    ]);
                $i++;
            }
        } catch (\Exception $ex) {
            DB::rollback();
        }
        DB::commit();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $header_text = 'แก้ไขข้อมูลสินค้า';
        $mode = 'edit';
        $form_action = '/product/'.$product->id;
        return view('product.form', compact('product', 'header_text', 'mode', 'form_action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function GeraHash($qtd){ 
    //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
        $QuantidadeCaracteres = strlen($Caracteres); 
        $QuantidadeCaracteres--; 

        $Hash=NULL; 
        for($x=1;$x<=$qtd;$x++){ 
            $Posicao = rand(0,$QuantidadeCaracteres); 
            $Hash .= substr($Caracteres,$Posicao,1); 
        } 
        return $Hash; 
    } 

}
