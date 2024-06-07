<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{


    
    //create post 

    public function createPost(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('image')){
            $image = $request->image;
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image'),$imageName);
        }
        $post = new Post();
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->image = $imageName ?? " ";
        $post->user_id= Auth::user()->id;
        $post->save();
        return redirect()->back()->with('success','post Created');


    }
    //get posts 

    public function getAllPosts (){
        $posts = Post::all();
        return view('front.components.feed',['posts'=>$posts]);

    }
    //get single post
    //update post
    //delete post 
    
}
