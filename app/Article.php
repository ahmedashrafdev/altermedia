<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //s
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function author()
    {
    	return $this->belongsTo('App\Author');
    }

    public function getCreatedAtAttribute($value)
	{ 
		return Carbon::parse($value)->diffForHumans();
	}
}
