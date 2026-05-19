@php
    $partners = config('partners.items', []);
@endphp

<section id="partners" class="partners">
    <div class="container">
        <h2>Нам доверяют</h2>

        <div class="partners__marquee">
            <div class="partners__track">
                @foreach ($partners as $partner)
                    <img src="{{ asset($partner['image']) }}" alt="{{ $partner['alt'] }}" title="{{ $partner['title'] }}"
                        loading="lazy">
                @endforeach
            </div>

            <div class="partners__track" aria-hidden="true">
                @foreach ($partners as $partner)
                    <img src="{{ asset($partner['image']) }}" alt="" title="{{ $partner['title'] }}"
                        loading="lazy">
                @endforeach
            </div>
        </div>
    </div>
</section>
