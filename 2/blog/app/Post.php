<?php

namespace App;

class Post extends Model
{
  public function comments() {
    return $this->hasMany(Comment::class);
  }

  public function addComment($body) {
    $this->comments()->create(compact('body'));
    // $this->comments()->create(['body' => $body]);
    // Comment::create([
    //   'body' => $body,
    //   'post_id' => $this->id
    // ]);
  }
    // protected $fillable = ['title', 'body'];
    // protected $guarded = ['user_id'];
}
