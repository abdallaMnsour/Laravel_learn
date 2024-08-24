@extends('dashboard.layout.app')

@section('content')
    <h1>
        <a href="{{ route('user.create') }}">add user</a>
    </h1>
    <table class="table table-primary table-hover">
        <thead>
            <tr>
                <th>username</th>
                <th>email</th>
                <th>phone</th>
                <th>role</th>
                <th>controller</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($collection as $item)
                
            @endforeach --}}
            <tr>
                <td>abdalla</td>
                <td>abdalla@gmail.com</td>
                <td>123412364</td>
                <td>admin</td>
                <td>
                    <button class="btn btn-primary">update</button>
                    <button class="btn btn-danger">delete</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
