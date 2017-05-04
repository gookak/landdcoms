<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;
use DB;

class UploadController extends Controller
{
	public function uploadForm()
	{
		return view('upload.form');
	}

	public function uploadSubmit(Request $request)
	{
		//dd($request->all());
		//$product = Product::create($request->all());
		foreach ($request->photos as $photo) {
			$filename = $photo->store('public');
			// ProductImage::create([
			// 	'product_id' => $product->id,
			// 	'filename' => $filename
			// 	]);
		}
		return 'Upload successful!';
	}

	public function show()
	{
		$url = Storage::url('ww5yuh4HpBWDVwSbMNV0jvY0xGGbj0pgCklQJqMm.jpeg');
		//return $url;
		return "<img src='".$url."'/>";
		// return Storage::allFiles('public');
	}
}
