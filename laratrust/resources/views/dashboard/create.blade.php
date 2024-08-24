@extends('dashboard.layout.app')

@section('content')
    <form action="{{ route('user.store') }}" method="POST" class="w-50 m-auto">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="pass">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <select name="role" class="form-select" aria-label="Default select example">
            <option>Open this select menu</option>
            <option @selected(old('role') == 'user') value="user">User</option>
            <option @selected(old('role') == 'admin') value="admin">Admin</option>
            <option @selected(old('role') == 'super_admin') value="super_admin">Super Admin</option>
        </select>
        @error('role')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
