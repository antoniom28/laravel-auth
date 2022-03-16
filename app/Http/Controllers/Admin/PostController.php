<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{
    protected $validation = [
        "title" => "string|min:10",
        "content" => "required",
        "published" => "required",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validation);

        $data = $request->all();

        $new_post = new Post();
        $new_post->title = $data["title"];
        $new_post->content = $data["content"];
        if($data["published"] == 'yes')
            $new_post->published = true;
        $new_post->slug = Str::of($data["title"])->slug("-");
        $new_post->save();

        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
      //  $this->validate["content"] = "required|content,$post->id;
        $request->validate($this->validation);

        $data = $request->all();

        $new_post = new Post();
        $new_post->title = $data["title"];
        $new_post->content = $data["content"];
        if($data["published"] == 'yes')
            $new_post->published = true;
        $new_post->slug = Str::of($data["title"])->slug("-");
        $new_post->save();

        return redirect()->route('admin.posts.show' , $post->id);
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
