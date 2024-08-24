<x-includes.app>

    <x-layout.form to="{{ url('test/user') }}"
                   type="multipart/form-data"
                   method="post"
                   class="d-flex flex-column m-auto w-75"
                   btn="Create">
        @csrf

        <x-slot:child title="my title">
            my slot
        </x-slot:child>

        <x-layout.inputs placeholder="username"
                         type="text"
                         name="username"
                         value="{{ old('username') }}" />
        @error('username')
            {{ $message }}
        @enderror
        <x-layout.inputs placeholder="email"
                         type="email"
                         name="email"
                         value="{{ old('email') }}" />
        @error('email')
            {{ $message }}
        @enderror
        <x-layout.inputs placeholder="password" type="password" name="password" />
        @error('password')
            {{ $message }}
        @enderror
        {{-- <x-layout.inputs type="file" multiple name="image[]" /> --}}
        <x-layout.inputs type="file" name="image" />
        @error('image')
            {{ $message }}
        @enderror


    </x-layout.form>
</x-includes.app>
