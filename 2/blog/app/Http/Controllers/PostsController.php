<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct() {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

      $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

      // $archives = Post::archives();

      // return $archives;


      return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
      return view('posts.show', compact('post'));
    }

    public function create() {
      return view('posts.create');
    }

    public function store() {
      // dd(request(['title', 'body']));
      // $post = new \App\Post;
      //
      // $post->title = request('title');
      // $post->body = request('body');
      // $post->save();

      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body')
      // ]);

      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      // Post::create(request(['title', 'body']));
      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );
      //
      // Post::create([
      //     'body' => request('body'),
      //     'title' => request('title'),
      //     'user_id' => auth()->id()
      // ]);

      return redirect('/');
    }

}
