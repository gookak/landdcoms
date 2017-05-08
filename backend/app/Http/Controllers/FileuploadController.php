<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fileupload;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Support\Facades\DB;

class FileuploadController extends Controller
{
	public function index()
	{
		$fileuploads = Fileupload::orderBy('updated_at','desc')->get();
		return view('fileupload.index', compact('fileuploads'));
	}

	public function show()
	{
		// $files = Storage::files('public');
		$url = Storage::url('7fonNYTrmqToTZjB6tVXlKXZagC0vpMHwyk5uWAn.jpeg');
		$url2 = Storage::url('public/product/rpKn8rwfwrUxwfsC98GHvapUPK7gLec1BRNYm6dW.jpeg');
		$image = "<img src='".$url2."'/>";
		return $image;
	}

	public function upload(FileUploadRequest $request)
	{
		DB::beginTransaction();
		try{
			foreach ($request->images as $image) {
				//$filename = $image->store('public');
				$filename = Storage::put('public', $image);
				Fileupload::create([
					'filename' => $image->hashName()
					]);
			}
		} catch (\Exception $ex) {
			DB::rollback();
		}
		DB::commit();

		//return redirect('fileupload');
		return back();
	}
}
