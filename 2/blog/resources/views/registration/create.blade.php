@extends('layouts.master')

@section('content')

  <div class="col-sm-8">
    <h1>Register</h1>

    <form action="/register" method="POST">
      {{csrf_field()}}

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" required>
      </div>

      <div class="form-group">
        <button class="btn btn-primary">Register</button>
      </div>

      @include('partials._errors')

    </form>
  </div>
@endsection
