@extends('layouts.all')

@section('main')
    <header class="main_header">
        <div class="shadow"></div>
        <div class="container">

            <x-header-top-inner></x-header-top-inner>

            <div class="center">
                <h1>Разработка <br>цифровыx сервисов <br>и сайтов</h1>
                <div class="control_btn">
                    <a href="{{ config('contacts.tg_link') }}" class="button button__white button__icon">

                        <svg class="btn_icon">
                            <use xlink:href="#tg_icon_to_btn"></use>
                        </svg>

                        <span>Обсудить проект</span>
                    </a>
                </div>
            </div>
            <div class="bottom">
                <a href="{{ route('page', 'politika-v-oblasti-obrabotki-personalnyx-dannyx') }}">Политика в области персональных данных</a>
                <a href="{{ route('page', 'soglasie-na-obrabotku-personalnyx-dannyx') }}">Согласие на обработку персональных данных</a>
            </div>
        </div>
    </header>
@endsection

