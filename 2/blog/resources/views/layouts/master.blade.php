
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      @include('partials._nav')
      @include('partials._scroller')
      <div class="row">
        <div class="col-sm-8">
          @yield('content')
        </div>
        <div class="col-sm-4">
          @include('partials._sidebar')
        </div>
      </div>
    </div>
    @include('partials._footer')
  </body>
</html>
