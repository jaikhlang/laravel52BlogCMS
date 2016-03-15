<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PagesController extends Controller
{
    public function getIndex(){
    	$posts = Post::orderBy('id', 'desc')->paginate(4);
    	$labels = Post::orderBy('id', 'desc')->select('label')->distinct()->get();
    	return view('pages.home')->withPosts($posts)->withLabels($labels);
    }
}
