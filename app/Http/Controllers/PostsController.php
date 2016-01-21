<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function show($id){

        
    	$item = Post::findOrFail($id);

    	// $this->authorize('show-post', $item);
    	// if (Gate::denies('show-post', $item)) {
    	// 	abort(403, 'Sorry ... Noooo');
    	// }
    	// return $item;
        
        // if (Gate::denies('update', $item)) {
        //  abort('403', 'Soweeee');
        // }
        if (Gate::denies('post-list', $item)) {abort('403', 'Access Blocked');}
    	return view('posts.show', compact('item'));
    }
}
