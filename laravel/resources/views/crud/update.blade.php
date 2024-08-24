@extends('crud.includes.app')

{{-- title page --}}
@section('title', 'update page')

{{-- active link 'home' in the navbar --}}
@section('update', 'active')



{{-- type you content --}}
@section('content')

    <form action="{{ url("crud/my/{$user->id}") }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="username" placeholder="enter you name" value="{{ old('username') ?? $user->name }}" />
        @error('username')
            {{ $message }}
        @enderror
        <input type="text" name="email" placeholder="your E-mail" value="{{ old('email') ?? $user->email }}" />
        @error('email')
            {{ $message }}
        @enderror
        <input type="password" name="password" placeholder="your password" value="{{ old('password') ?? $user->password }}" />
        @error('password')
            {{ $message }}
        @enderror
        <input type="submit" value="submit" />

    </form>
@endsection
