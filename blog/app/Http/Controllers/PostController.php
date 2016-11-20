<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use Illuminate\Support\Facades\Session;



class PostController extends Controller
{

    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderby('id', 'desc')->paginate(5);

        return view('posts.index')->with('posts', $posts);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        //validate the data
        $this->validate(
            $request, array(
                'title' => 'required|max:255',
                'body' => 'required'
            )
        );

        //sucesfuly store
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        //if save success send user a message
        Session::flash('success', 'The Blog Was Successfully Saved.');

        //redirect
        //named route passed through
        return redirect()->route('posts.show' , $post->id);
    }


    public function show($id)
    {
        //echo "in"; die;
        $posts = Post::find($id);
        return view('posts.show')->with('posts', $posts);
    }


    public function edit($id)
    {
        //find the post in the database and save it in a variable
        $post = Post::find($id);

        //return the view and pass the variable with that view
        return view('posts.edit')->with('post', $post);
    }


    public function update(Request $request, $id)
    {
        //validate the data
        $this->validate(
            $request, array(
                'title' => 'required|max:255',
                'body' => 'required'
            )
        );

        //save the data
        $post = Post::Find($id);
        $post->title = $request->input('title');
        $post->title = $request->input('title');

        //comit the changes
        $post->save();

        //flash data
        Session::flash('success', 'The Blog Was Successfully Updated.');
        $succ_msg = "The Blog Was Successfully Updated.";

        //redirect
        return redirect()->route('posts.show', $post->id)-> with('message', $succ_msg);
    }


    public function destroy($id)
    {
        $post = Post::Find($id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
