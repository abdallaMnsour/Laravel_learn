@extends('crud.includes.app')

{{-- title page --}}
@section('title', 'create page')

{{-- active link 'home' in the navbar --}}
@section('create', 'active')



{{-- type you content --}}
@section('content')

    <form action="{{ url('crud/my') }}" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter you name" value="{{ old('username') }}" />
        @error('username')
            {{ $message }}
        @enderror
        <input type="text" name="email" placeholder="your E-mail" value="{{ old('email') }}" />
        @error('email')
            {{ $message }}
        @enderror
        <input type="password" name="password" placeholder="your password" value="{{ old('password') }}" />
        @error('password')
            {{ $message }}
        @enderror
        <input type="submit" value="submit" />

    </form>
@endsection
