<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;

class PostsController extends Controller
{

public function __construct(/*Posts $posts*/) {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts) {

      // return session('message');

      // dd($posts);
      $posts = $posts->all();

      // $posts = Post::latest()
      //   ->filter(request(['month', 'year']))
      //   ->get();

      // $posts = (new \App\Repositories\Posts)->all();

      // $archives = Post::archives();

      // return $archives;

      // $stripe = resolve('App\Billing\Stripe');
      // dd($stripe);
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

      session()->flash(
        'message', 'Your post has been published'
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
