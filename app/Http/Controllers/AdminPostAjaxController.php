<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use App\Post;
use \Illuminate\Support\Str;

use Illuminate\Http\Request;

class AdminPostAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.list');
    }

    public function getListPosts()
    {
        return datatables::of(Post::query())
        ->addcolumn('action', function ($post) {
            return '<button data-url="'.route('posts.show',$post->id).'"​  type="button" class="btn btn-xs btn-light btn-show" data-toggle="modal" data-target="#modal-show">Detail</button>
            <button data-url="'.route('posts.edit',$post->id).'"​ type="button" class="btn btn-xs btn-light btn-show" data-toggle="modal" data-target="#modal-edit">Edit</button>
            <button data-url="'.route('posts.show',$post->id).'"​ type="button" class="btn btn-xs btn-light btn-show" >Delete</button>
            ';
        })
        // ->editColumn('thumbnail', function (Post $post) {
        //  return '<img src="'.$post->thumbnail.'" ></img>';
        // })
        ->editColumn('description', function (Post $post) {
            return Str::words($post->description,25,'...');
        })
        ->editColumn('content', function (Post $post) {
            return Str::words($post->content,25,'...');
        })
        // ->rawColumns(['thumbnail','action'])
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Post::find($id);
        //$categories = $post->categories;
        return response()->json(['post'=>$post],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
