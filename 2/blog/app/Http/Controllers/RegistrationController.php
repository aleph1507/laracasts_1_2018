<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
// use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create () {
      return view('registration.create');
    }

    public function store(RegistrationForm $form) {
      // $this->validate(request(), [
      //   'name' => 'required',  vo RegistrationRequest->rules
      //   'email' => 'required|email',
      //   'password' => 'required|confirmed'
      // ]);

      // $info = ['name' => request()->only('name'),
      //           'email' => request()->only('email'),
      //           'password' => bcrypt(request()->only('password'))];
      //

      // $tp = bcrypt(request(['password'])['password']);

      // dd($tp);

      // request(['password'])['password'] = $tp;

      // dd(request());

      // $user = User::create([request()->only('name'), request()->only('email'), $tp]);

      // $user = User::create(request(['name', 'email', 'password'])); vo RegistrationRequest->persist
      //
      // // \Auth::login();
      // auth()->login($user);
      //
      // \Mail::to($user)->send(new Welcome($user));

      $form->persist();

      session()->flash('message', 'Thank you for signing up');

      return redirect()->home();
    }
}
