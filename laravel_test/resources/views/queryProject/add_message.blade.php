<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>hello {{ $username ?? 'user' }}</h1>
  <h1>your age is {{ $age ?? '"no age"' }}</h1> 

  <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="add title" name="title" value="{{ old('title') }}" />
    @error('title')
        @dump($message)
    @enderror<br>
    <input type="text" placeholder="add email" name="email" value="{{ old('email') }}"  />
    @error('email')
      @dump($message)
    @enderror<br>
    <input type="file" name="image" />
    @error('image')
      @dump($message)
    @enderror<br>
    <textarea name="comment" id="" cols="30" rows="10">{{ old('comment') }}</textarea>
    @error('comment')
      @dump($message)
    @enderror<br>
    <input type="submit" value="submit" />
  </form>
  <a href="{{ route('main') }}">home</a>
</body>
</html>