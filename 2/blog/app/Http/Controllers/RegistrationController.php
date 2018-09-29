<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create () {
      return view('registration.create');
    }

    public function store() {
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      // $info = ['name' => request()->only('name'),
      //           'email' => request()->only('email'),
      //           'password' => bcrypt(request()->only('password'))];
      //

      $tp = bcrypt(request(['password'])['password']);

      // dd($tp);

      // request(['password'])['password'] = $tp;

      // dd(request());

      // $user = User::create([request()->only('name'), request()->only('email'), $tp]);

      $user = User::create(request(['name', 'email', 'password']));

      // \Auth::login();
      auth()->login($user);

      return redirect()->home();
    }
}
