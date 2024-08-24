@if ($type == 'textarea')
    <textarea name="{{ $name ?? '' }}" {{ $attributes }}>{{ $value ?? '' }}</textarea>
@else
    <input type="{{ $type ?? 'text' }}" name="{{ $name ?? '' }}" {{ $attributes }} />
@endif
