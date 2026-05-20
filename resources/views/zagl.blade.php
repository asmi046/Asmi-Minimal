@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <x-breadcrumbs.main :title="'Страница в разработке'"></x-breadcrumbs.main>
            <h1 class="page_h1">Страница в разработке</h1>
            <div class="text_styles">
                <p>Эта страница находится в разработке. Пожалуйста, зайдите позже. Или давайте обсудим проект:</p>
                <br>
                <a href="{{ config('contacts.tg_link') }}" class="button">Обсудить проект</a>
            </div>
        </div>
    </section>
@endsection
