@include('crud.includes.header')

{{-- your content between header and footer --}}
{{ $slot }}

@include('crud.includes.footer')
