<?php

namespace App;

class Fileupload extends Model
{
	protected $table = 'fileupload';
	
	public function productImage(){
		return $this->belongsTo(ProductImage::class);
	}
}
