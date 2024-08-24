@props(['to', 'type'])

<form action="{{ $to }}" enctype="{{ $type }}" {{ $attributes }}>
    {{ $slot }}
    <input type="submit" value="{{ $btn ?? 'submit' }}">
</form>
