<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function author()
    {
    	return $this->belongsTo('App\Author');
    }
}
