<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
	
	public function getIndex() {
	$posts = Post::paginate(10);
	
	return view('blog.index')->withPosts($posts);
	}
	
    public function getSingle() {
	//fetch from the DB based on slug
	$post=Post::where('slug', '=', $slug)->first();
	
	//return view and pass in the post project
	return view('blog.single')->withPost($post);
	
	}
	
}
