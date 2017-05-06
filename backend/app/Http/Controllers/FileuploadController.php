<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileuploadController extends Controller
{
	public function index()
	{
		return view('fileupload.index');
	}

	public function upload(Request $request)
	{
		// ref >> http://laraveldaily.com/upload-multiple-files-laravel-5-4/
		dd($request->all());

		// $product = Product::create($request->all());

		// foreach ($request->photos as $photo) {
		// 	$filename = $photo->store('photos');
		// 	ProductsPhoto::create([
		// 		'product_id' => $product->id,
		// 		'filename' => $filename
		// 		]);
		// }
		// return 'Upload successful!';
	}
}
