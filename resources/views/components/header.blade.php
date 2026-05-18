    <section id="site-header" class="site-header">
        <div class="container">
            <div class="site-header__row">
                <a href="{{ route('home') }}" class="site-header__logo-link" aria-label="На главную">
                    <img class="site-header__logo" src="{{ asset('img/logo-black.svg') }}" alt="{{ config('app.name') }}">
                </a>

                <div class="site-header__contacts">
                    <div class="site-header__menu">
                        <x-menues.puncts></x-menues.puncts>
                    </div>

                    <a class="site-header__email"
                        href="mailto:{{ config('contacts.email') }}">{{ config('contacts.email') }}</a>

                    <a href="{{ config('contacts.tg_link') }}" class="sl_link tg_link">
                        <svg class="sprite_icon __black">
                            <use xlink:href="#tg_icon_black"></use>
                        </svg>
                    </a>

                    <a href="{{ config('contacts.max_link') }}" class="sl_link max_link">
                        <svg class="sprite_icon __black">
                            <use xlink:href="#max_icon_black"></use>
                        </svg>
                    </a>

                    <a class="phone"
                        href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                </div>
            </div>
        </div>
    </section>
