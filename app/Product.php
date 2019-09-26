<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['company_id','name'];

	public function companies()
	{
		return $this->belongsto('App\Company','id');
	}

	public function detail()
	{
		return $this->hasOne('App\Detail','product_id');
	}
}
