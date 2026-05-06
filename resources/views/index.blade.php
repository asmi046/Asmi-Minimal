@extends('layouts.all')

@section('main')
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

                    <a href="{{ config('contacts.ws_link') }}" class="sl_link ws_link">
                        <svg class="sprite_icon __black">
                            <use xlink:href="#ws_icon_black"></use>
                        </svg>
                    </a>

                    <a class="phone"
                        href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section id="main-banner" class="main-banner">
        <div class="container">
            <div class="main-banner__top">
                <div class="main-banner__top-left">
                    <h1>Разработка <br>цифровыx сервисов <br>и сайтов для бизнеса</h1>
                    <p>Полный цикл разработки цифровых решений для бизнеса, от простых посадочных страниц до сложных
                        интеграционных решений.</p>
                </div>

                <div class="main-banner__top-right">
                    <div class="main-banner__stat-number">#20</div>
                    <div class="main-banner__stat-label">лет на рынке web&#8209;разработки</div>
                </div>
            </div>

            <div class="main-banner__video-wrap">
                <video class="main-banner__video" src="{{ asset('video/asmi_main.mp4') }}"
                    poster="{{ asset('video/asmi_main_obl.webp') }}" autoplay loop muted playsinline preload="metadata">
                    <source src="{{ asset('video/asmi_main.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
@endsection
