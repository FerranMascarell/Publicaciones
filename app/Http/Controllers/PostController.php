<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function store(Request $request) {        
        
        $request->validate(['body' => 'required']);
        $request->user()->posts()->create($request->only('body'));
       // dd(['body'=>$request->body]);
        return back()->with('status',"Publicación guardada exitosamente");
    }
    
    public function destroy(Request $request, Post $post){
        $this->authorize('deletet',$post);

        $post->delete();
        return back();
    }
}
