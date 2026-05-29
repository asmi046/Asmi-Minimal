<section id="services-competencies" class="services-competencies">
    <div class="container">
        <h2>{{ $title }}</h2>
        <p>{{ $description }}</p>
        <br>

        <div class="services-competencies__list">
            @foreach ($groups as $groupName => $items)
                <div class="services-competencies__item">
                    <h3>{{ $groupName }}</h3>

                    <div class="services-competencies__icons">
                        @foreach ($items as $item)
                            <div class="services-competencies__icon-wrap">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
