<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{

	public function index()
	{
		$posts  = Post::select('posts.*','categories.slug as category_slug')->join('categories','categories.id','=','posts.category_id')->get(); 
		return view('posts.index',['posts' => $posts]);
	}

	public function detail($slug)
	{
		$post = Post::where('slug',$slug)->FirstOrFail();
		return view('posts.detail',['post' => $post]);
	}

	public function category($slug)
	{
		$category = \App\Category::where('slug',$slug)->firstOrFail();

		$posts = \App\Post::where('category_id', $category->id)->get();

		return view('categories.index',['posts' => $posts]);
	}

}
