<form action="{{ url("crud/my/{$user->id}") }}" method="post">
    @method('DELETE')
    <button class="btn btn-{{ $btnColor }}">delete</button>
</form>
