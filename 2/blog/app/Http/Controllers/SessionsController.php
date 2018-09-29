<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

  public function __construct() {
    $this->middleware(['guest'])->except('destroy');
  }

    public function create() {
      return view('sessions.create');
    }

    public function destroy() {
      auth()->logout();

      return redirect()->home();
    }

    public function store(Request $request) {
      // attempt to authenticate the user
      // if(!auth()->attempt(request(['email', bcrypt'password']))){
      //   return back();
      // }
      // $pass = request(['password'])['password'];
      // dd('pass: ', $pass);
      // dd('request(["password"]) = ', request(['password'])['password']);

      // dd($request->only('password')['password']);

      // $credentials = $request->only('email', bcrypt($request->only('password')['password']));

      // $credentials = ['email' => $request->only('email'),
      //                 'password' => bcrypt($request->only('password')['password'])];

      // dd($credentials);


      // dd(request());

      if(!auth()->attempt(request(['email', 'password']))){
        return back()->withErrors([
          'message' => 'Please check credentials and try again.'
        ]);
      }

      // if(!auth()->attempt($credentials)) {
      //   dd(auth()->attempt($credentials));
      // }

      // if not redirect back

      return redirect()->home();

      // if auth sign them in

      // redirect to home page
    }
}
