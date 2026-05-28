<section id="services-page-header" class="services-page-header">
    <div class="container">
        <div class="services-page-header__box">
            <div class="services-page-header__right">
                <h1 class="page_h1">{{ $title }}</h1>
                <p>{{ $subtitle }}</p>
                <a href="{{ config('contacts.tg_link') }}" class="button">Обсудить проект</a>
            </div>

            <div class="services-page-header__left">
                <img src="{{ asset($image) }}" alt="{{ $imageAlt }}" loading="lazy">
            </div>
        </div>
    </div>
</section>
