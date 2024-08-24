{{-- test blade php user --}}
{{-- {{ url('name') }} --}}
{{-- {{ route('name') }} --}}

<form action="{{ url('product/12') }}" method="post">
{{-- <form action="{{ route('pro') }}" method="post"> --}}
{{-- <form action="{{ url('products') }}" method="post"> --}}
  @csrf
  @method('patch')
  <input type="text" name="yourname"/>
  <button>click</button>
</form>

@yield('name')

