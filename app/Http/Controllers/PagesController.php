<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {
	
	public function getIndex(){
		//query builder
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view("pages.welcome")->withPosts($posts);
	}
	public function getAbout(){
		return view("pages.about");
	}
	public function getContact(){
		return view("pages.contact");
	}
	public function getMain(){
		return view("pages.main");
	}
	}	