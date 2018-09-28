<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($tasks as $task)
      <ul>
        <li>
          <a href="/tasks/{{$task->id}}">{{$task->body}}</a>
        </li>
      </ul>
    @endforeach
  </body>
</html>
