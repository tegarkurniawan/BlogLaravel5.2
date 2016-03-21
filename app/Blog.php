<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'category_id'
    ];


    protected $table = 'blog';

    public function category()
	{	
		return $this->belongsTo('App\Category');
	}
}
