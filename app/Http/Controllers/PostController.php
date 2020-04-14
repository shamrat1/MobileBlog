<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $posts = Post::all();

        return response()->json(
            ['data' => $posts]
        );
    }

    public function show($id){
        $post = Post::find($id);

        return response()->json([
            "data" => $post
        ],200);
    }

    public function store(Request $request){
        Post::create([
            "title" => $request->input('title'),
            "body" => $request->input('body'),
            "tags" => $request->input('tags')
        ]);

        return response()->json([
            "message" => "Saved Successfully."
            // "message" => "failed."
        ],200);
    }

    public function update(Request $request,$id){
        // dd($request->all());

        Post::find($id)->update($request->all());
        
        return response()->json([
            "message" => "Post updated successfully."
        ],200);
    }

    public function delete($id){
        Post::destroy($id);

        return response()->json([
            "message" => "Post Deleted."
        ],200);
    }
}
