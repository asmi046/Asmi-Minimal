<section id="services" class="services">
    <div class="container">
        <h2>{{ $title }}</h2>

        <div class="services__list">
            @foreach ($cards as $card)
                <article class="services__card">
                    <h3>{{ $card['category'] }}</h3>

                    <ul>
                        @foreach ($card['items'] as $service)
                            <li><a href="#">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>

                    @if (!empty($card['image']))
                        <img src="{{ asset($card['image']) }}" alt="{{ $card['category'] }}" loading="lazy">
                    @endif
                </article>
            @endforeach
        </div>
    </div>
</section>
