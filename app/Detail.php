<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable =['company_id','product_id','model','price','image','availability'];

    public function product()
    {
    	return $this->belongsTo('App\Product','product_id');
    }
}
