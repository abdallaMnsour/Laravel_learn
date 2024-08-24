<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @php
      dump(Session::all());
      // Session::push('myTest', ['name' => 'abdalla mansour', 'email' => 'a.mansour.code@gmail.com']);
      dump(Session::get('myTest.0.name'));
      dump(Session::all());
      // Cookie::push();
  @endphp
  <h1>hello {{ $username ?? 'user' }}</h1>
  <h1>your age is {{ $age ?? '"no age"' }}</h1>
  @dump( Session::get('username') )
  
  @dump( Cookie::get('name_user') )
  <h1>{{ Cookie::get('name_clint') }}</h1>
  <a href="{{ route('add_comment') }}">add comment</a>

  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>commit</th>
        <th>controll</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comments ?? [] as $comment)
      <tr>
        <td>{{ $comment->id }}</td>
        <td>{{ $comment->title }}</td>
        <td>{{ $comment->comment }}</td>
        <td>
          <a href="{{ route('update', ['id' => $comment->id]) }}" style="background: rgb(0, 255, 162)">edit</a> 
          <a href="{{ route('delete', ['id' => $comment->id]) }}" style="background: rgb(255, 0, 115)">delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>