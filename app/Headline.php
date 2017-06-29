<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
	protected $fillable = [
		'title',
		'subtitle',
		'image',
		'image_alt',
		'href'
	];

    public static function report($data)
    {
    	if (self::check($data['title'])) {
    		return false;
    	}

		return self::create($data);
    }

    public static function check($title)
    {
    	return self::where('title', $title)->count();
    }
}
