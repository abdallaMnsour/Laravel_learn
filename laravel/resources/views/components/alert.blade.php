@props(['name', 's_name'])

@for ($i = 0; $i < $limit; $i++)
    <div class="alert alert-{{ $color }}">
        {{ $title ?? $slot }}
        {{-- @dump($test) --}}
        @dump($slot)
        @dump($attributes)
        <div {{ $attributes }}>hello</div>
        @dump($s_name->attributes->class(['p-5']))
        @aware(['class'])
        @dump($s_name->attributes->class(['p-5']))
        @dump($s_name)
        {{ $s_name }}
        @dump($name)
        @aware(['name'])
        @dump($name)
    </div>
@endfor
