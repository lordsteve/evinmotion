<section>
    @isset($img)
        <img src="{{ $img }}" alt="{{ $name }}" />
    @endisset
    <h2>{{ $name }}</h2>
    <div class="inner-section">{{ $slot }}</div>
</section>
