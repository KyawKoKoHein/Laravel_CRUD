<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $postData = Post::orderBy('created_at', 'desc')->get()->toArray();
        // $postData = Post::all()->toArray();
        return view('create', compact('postData'));
    }

    // insert data
    public function insert(Request $request)
    {
        $requestData = $this->prepareData($request);

        Post::create($requestData);

        $postData = Post::orderBy('created_at', 'desc')->get()->toArray();

        return redirect()->route("post#createPage")->with(['insertSuccess'=>'Successfully inserted 😉']);
    }

    // delete data
    public function delete($id){
        Post::where('id', $id)->delete();

        return redirect()->route('post#createPage');
    }

    //readMore data
    public function readMore($id){
        $post = Post::where('id',$id)->first()->toArray();
        // $post = Post::where('id',$id)->get()->toArray();

        // dd($post);

        return view('readmore',compact('post'));
    }

    public function edit($id){
        $post = Post::where('id',$id)->first()->toArray();

        return view('edit', compact('post'));
    }

    public function update(Request $request){
        $id = $request->postId;
        $updateData = $this->prepareData($request);

        Post::where('id', $id)->update($updateData);

        return redirect()->route('post#home')->with(['insertSuccess'=>'Successfully updated👌🕵️‍♂️']);
    }


    // prepare data
    private function prepareData($request)
    {
        $data = [
            'title' => $request->postTitle,
            'description' => $request->postDescription,
        ];

        return $data;
    }
}
