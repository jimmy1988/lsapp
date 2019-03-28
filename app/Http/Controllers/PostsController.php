<?php

namespace App\Http\Controllers;
use App\Post;
use DB;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Posts";
        $data['description'] = "";

        //return all data
        // return Post::all();

        //return only 1 record - all records ordered by created_at
        // $data ['posts'] = Post::orderBy('created_at', 'desc')->take(1)->get();

        //get al records - order by created_at descending
        // $data ['posts'] = Post::orderBy('created_at', 'desc')->get();

        //use the DB class to execute raw sql
        // $data ['posts'] = DB::select('SELECT * FROM posts ORDER BY created_at DESC');

        //enable pagination
        $data ['posts'] = Post::orderBy('created_at', 'desc')->paginate(10);

        return view("posts.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
          'title' => "Create Post",
          'description' => ""
        );

        return view("posts.create")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'title' => 'required',
          'body' => 'required'
        ]);

        //create post
        $post = new Post;
        $post->title = $request->input("title");
        $post->body = $request->input("body");
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data['title'] = "Posts";
      $data['description'] = "";
      $data['post'] = Post::find($id);
      return view("posts.show")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
