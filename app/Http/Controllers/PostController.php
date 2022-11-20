<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $model = new Post;
        $data=$model->all();
        return view('add-blog-post-form',['data' => $data]);
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Data Tugas Telah Dimasukan');
    }
    public function delete($id){
        $model=Post::find($id);
        $model->delete();
        return redirect('add-blog-post-form')->with('status-deleted', 'Data Tugas Telah Dihapus');
    }
    public function edit($id){
        // $data = Post::find($id);
        // return view('edit',[
        //     'post'=>$data
        // ]);
        // $post   = Post::whereId($id)->first();
        // $post   = Post::whereId($id)->get()[0];
        $post   = Post::find($id);
        return view('edit')->with('post', $post);
    }
    public function update(Request $request,$id){
        $post=Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Data Tugas Telah Diperbarui');
    }
}
// Mahardika Surya Kusuma G.231.21.0141
