@extends('layouts.all')

@section('main')
    <header class="main_header">
        <div class="container">
            <div class="top">
                <a  href="{{ route('home') }}">
                    <img class="logo" src="{{ asset('img/logo.svg') }}" alt="">
                </a>


                <div class="contacts">

                    <a href="{{ config('contacts.tg_link') }}" class="sl_link tg_link">
                        <svg class="sprite_icon">
                            <use xlink:href="#tg_icon"></use>
                        </svg>
                    </a>

                    <a href="{{ config('contacts.ws_link') }}" class="sl_link ws_link">
                        <svg class="sprite_icon">
                            <use xlink:href="#ws_icon"></use>
                        </svg>
                    </a>

                    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                </div>
            </div>
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
                <a href="#">Политика в области персональных данных</a>
                <a href="#">Согласие на обработку персональных данных</a>
            </div>
        </div>
    </header>
@endsection

