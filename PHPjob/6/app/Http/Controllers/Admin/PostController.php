<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function add()
  {
    return view('admin.post');
  }

  public function create(Request $request)
  {
    // Varidationを行う
    $this->validate($request, Post::$rules);
    $post = new Post;
    $form = $request->all();

    // データベースに保存する
    $post->fill($form);
    $post->save();

    return redirect('admin/post');
  }  

  public function index(Request $request)
  {
    $post = Post::all();

    return view('admin.post');
  }
}