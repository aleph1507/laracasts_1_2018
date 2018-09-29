@extends('layouts.master')

@section('content')
  <div class="col-md-8">
    <h1>Sign In</h1>

    <form action="/login" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>

      @include('partials._errors')
    </form>
  </div>
@endsection
