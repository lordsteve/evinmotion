<div class="hero {{ $size ?? 'L' }}">
    @isset($img)
        <img src="{{ $img }}" />
    @endisset
    <h1>{{ $slot }}</h1>
</div>