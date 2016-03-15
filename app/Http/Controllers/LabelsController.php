<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class LabelsController extends Controller
{
    public function getIndex($id){
    	$posts = Post::orderBy('id', 'desc')->where('label', $id)->paginate(4);
       	$labels = Post::orderBy('id', 'desc')->select('label')->distinct()->get();
       	return view('pages.label')->withPosts($posts)->withLabels($labels); 
    }

    public function getRedirect(){
    	$posts = Post::orderBy('id', 'desc')->paginate(4);
    	$labels = Post::orderBy('id', 'desc')->select('label')->distinct()->get();
    	return view('pages.home')->withPosts($posts)->withLabels($labels);
    }
}
