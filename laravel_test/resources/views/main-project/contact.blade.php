@extends('main-project.includes.app')

@section('content')
<form action="{{ route('con') }}" method="POST">
  <input type="text" name="name" /><br>
  <textarea name="message" id="" cols="30" rows="10"></textarea><br>
  <input type="submit" value="send" />
</form>
@isset ($name)
  @if ($name == 'abdalla')
  <h3>hello mr {{ $name }}</h3>
  @else
  <h3>my name is {{ $name }}</h3>
  @endif

  <h3>my message is {{ $message }}</h3>
@endisset
@endsection
      

{{-- 
  
  1- command
    اعمل كل اشكال الكوماند و اعمل كوماند بيعمل ملفات ليه اوبشن
  2- blade
    جرب البليد اللي البشممهندس عملو
  
  --}}