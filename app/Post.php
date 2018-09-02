<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'thumbnail',
		'description',
		'content',
		'slug',
		'user_id',
		'category_id',
		'view_count',
	];
}
