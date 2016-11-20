<?php


//belogs to here
namespace App\Http\Controllers;
use App\Post;



use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.welcome')->with('posts', $posts);
    }

    public function getAbout(){
    	return view('pages.about');
    }

    public function getContact(){
    	return view('pages.contact');
    }
}
