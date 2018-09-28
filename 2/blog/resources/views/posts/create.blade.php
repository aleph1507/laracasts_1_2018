@extends('layouts.master')

@section('content')
  <h1>create aa p[ost]</h1>

  <hr>

  <form method="POST" action="/posts">
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" name="title" >
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control" ></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>
  </form>

  @include('partials._errors')
@endsection
