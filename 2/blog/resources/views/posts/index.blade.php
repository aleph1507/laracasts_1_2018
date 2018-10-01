@extends('layouts.master')

@section('content')

  <main role="main" class="container">
    {{-- <div class="row"> --}}
      <div class="blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>

        @foreach($posts as $post)
          @include('partials.posts._post');
        @endforeach

        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      </div><!-- /.blog-main -->

      @include('partials._sidebar')
    <!--</div> /.row -->

  </main><!-- /.container -->
@endsection


@section('footer')
  <script></script>
@endsection
