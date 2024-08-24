<div class="w-50 m-auto mt-5 mb-5">
        @if (session('suc_delete'))
            <h2 class="alert alert-success"> {{ session('suc_delete') }} </h2>
        @elseif (session('err_delete'))
            <h2 class="alert alert-danger"> {{ session('err_delete') }} </h2>
        @endif
    <form wire:submit.prevent="handelSubmit" class="form form-primary">

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input wire:model="name" type="text" placeholder="username" class="form-control" id="username">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
          <label for="E-mail" class="form-label">E-mail</label>
          <input wire:model="email" type="email" placeholder="E-mail" class="form-control" id="E-mail">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input wire:model="password" type="password" placeholder="password" class="form-control" id="password">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Create +</button>

        @if(session('success'))
            <span class="text-success">{{ session('success') }}</span>
        @endif
    </form>

    <hr>


    <input class="form-control w-50 m-auto mb-3 mt-3" wire:model.live.debounce.500ms="search" type="search">

    <table class="table">
        <thead>
            <tr>
                <th>username</th>
                <th>E-mail</th>
                <th>control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>
                    <form wire:submit.prevent="handelUpdate({{ $user->id }})" class="form form-primary">
                        <ul>
                            @if ($userId == $user->id)
                                <li class="mt-2">
                                    <input type="text" wire:model="nameUpdate" class="form-control" />
                                    @error('nameUpdate')
                                        <div class="text-danger">{{ $message }} </div>
                                    @enderror
                                </li>
                                <li class="mt-2">
                                    <button class="btn btn-success mr-1">Update</button>
                                    <a wire:click.prevent="cancel()" class="btn btn-outline-secondary">Cancel</a>
                                </li>
                            @else
                                <li>{{ $user->name }}</li>
                            @endif
                        </ul>
                </td>
                <td>
                        <ul>
                            @if ($userId == $user->id)
                                <li class="mt-2">
                                    <input type="email" wire:model="emailUpdate" class="form-control" />
                                    @error('emailUpdate')
                                        <div class="text-danger">{{ $message }} </div>
                                    @enderror
                                </li>
                            @else
                                <li>{{ $user->email }}</li>
                            @endif
                        </ul>
                    </form>
                </td>
                <td>
                    <a wire:click.prevent="handelEdit({{ $user->id }})" class="btn btn-outline-success">update</a>
                    <a wire:click.prevent="handelDelete({{ $user->id }})" class="btn btn-outline-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- $users->links('pagination::bootstrap-4') --}}
    {{ $users->links('vendor.livewire.bootstrap') }}

</div>