<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

	public function index()
	{
		$posts  = Post::select('posts.*','categories.slug as category_slug')->join('categories','categories.id','=','posts.category_id')->paginate(6);
		$lastest_posts = Post::orderBy('id','desc')->limit(5)->get();
		$tags = \App\Tag::get();
		return view('posts.index',['posts' => $posts,'lastest_posts'=>$lastest_posts,'tags'=>$tags]);
	}

	public function detail($slug)
	{
		$post = Post::where('slug',$slug)->FirstOrFail();
		return view('posts.detail',['post' => $post]);
	}

	public function category($slug)
	{
		$posts = \App\Category::where('slug',$slug)->FirstOrFail()->posts;

		return view('categories.index',['posts' => $posts]);
	}

	
}
