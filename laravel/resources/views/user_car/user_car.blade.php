{{-- title page --}}
@section('title', 'read page')

{{-- active link 'home' in the navbar --}}
@section('read', 'active')

{{-- type you content --}}
<x-includes.app>

    <br><br>{{-- ---------------------------------------------------------- --}}<br><br>

    {{-- <x-alert color="dark"
            limit="3"
            name="ali"
            class="text-danger"
            test="this is my test">
        <x-slot:s_name class="btn btn-primary" the="the slog child">
            this is my slot name
        </x-slot>
        hello
    </x-alert> --}}

    <br><br>{{-- ---------------------------------------------------------- --}}<br><br>


    <br><br>{{-- ---------------------------------------------------------- --}}<br><br>

    <table class="table-secondary w-75 m-auto table">
        <thead>

            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>user image</th>
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
                    <td>
                        <a href="{{ url("test/delete/$user->id") }}">update</a>


                        {{-- components --}}

                        {{-- <x-delete_btn userId="{{ $user->id }}" btnColor="danger" /> --}}
                        {{-- <x-delete_btn userId="{{ $user->id }}" btn-color="danger" /> --}}
                        {{-- <x-delete_btn :userId="$user->id" btn-color="danger" /> --}}
                        <x-delete_btn :$user btn-color="danger" />


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $allUsers->links('pagination::bootstrap-5') }} --}}
    {{ $allUsers->onEachSide(1)->links() }}


</x-includes.app>
