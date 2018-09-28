<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

  public function scopeIncomplete($query, $val=null) { //Task::incomplete('val-data')->chain()
    return $query->where('completed', 0);
  }

    // public static function incomplete() {
    //   return static::where('completed', 0)->get();
    // }
}
