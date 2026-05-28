@extends('layouts.all')

@section('main')
    <x-services-page-header title="Наши услуги"
        subtitle="Мы создаем современные технологические решения для вашего бизнеса: от проектирования сложных интерфейсов до разработки и поддержки высоконагруженных систем."
        image="img/services/main_service.webp" image-alt="Наши услуги" />

    <x-services title="Список услуг" />

    <section id="faq" class="services-page-faq">
        <div class="container">
            <x-faq-package-faq section="Страница услуги" />
        </div>
    </section>
@endsection
