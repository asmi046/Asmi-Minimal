@extends('layouts.all')

@section('main')
    <section id="services-page-header" class="services-page-header">
        <div class="container">
            <div class="services-page-header__box">


                <div class="services-page-header__right">
                    <h1 class="page_h1">Наши услуги</h1>
                    <p>Мы создаем современные технологические решения для вашего бизнеса: от проектирования сложных
                        интерфейсов до разработки и поддержки высоконагруженных систем.</p>
                    <a href="{{ config('contacts.tg_link') }}" class="button">Обсудить проект</a>
                </div>

                <div class="services-page-header__left">
                    <img src="{{ asset('img/services/main_service.webp') }}" alt="Наши услуги" loading="lazy">
                </div>
            </div>
        </div>
    </section>
@endsection
