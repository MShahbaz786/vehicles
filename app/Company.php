<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
    	return $this->hasMany('App\Product','company_id');
    }
}
