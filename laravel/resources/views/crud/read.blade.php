@extends('crud.includes.app')

{{-- title page --}}
@section('title', 'read page')

{{-- active link 'home' in the navbar --}}
@section('read', 'active')

{{-- type you content --}}
@section('content')
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>images</th>
                <th>password</th>
                <th>control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allUsers as $user)
                <tr>
                    <td>{{ $id = $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->images->first()->image ?? 'no image' }}</td>
                    {{-- @dump()
                    <select>
                        @foreach ($user->images as $image)
                        @endforeach
                    </select> --}}
                    <td>{{ $user->password }}</td>
                    <td>
                        <a href="{{ url("crud/my/$user->id/edit") }}">update</a>
                        <form action="{{ url("crud/my/{$user->id}") }}" method="post">
                            @method('DELETE')
                            <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
