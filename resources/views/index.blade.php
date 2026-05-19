@extends('layouts.all')

@section('main')
    <section id="main-banner" class="main-banner">
        <div class="container">
            <div class="main-banner__top">
                <div class="main-banner__top-left">
                    <h1>Разработка <br>цифровыx сервисов <br>и сайтов для бизнеса</h1>
                    <p>Полный цикл разработки цифровых решений для бизнеса, от простых посадочных страниц до сложных
                        интеграционных решений.</p>
                    <br>
                    <a href="{{ config('contacts.tg_link') }}" class="button">Обсудить проект</a>
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

    <section id="services" class="services">
        <div class="container">
            <h2>Услуги</h2>

            <div class="services__list">
                <article class="services__card">
                    <h3>Разработка сайтов</h3>
                    <ul>
                        <li><a href="#">Разработка интернет магазина</a></li>
                        <li><a href="#">Разработка корпоративного сайта</a></li>
                        <li><a href="#">разработка посадочной страницы</a></li>
                        <li><a href="#">Разработка сайтов на Wordpress</a></li>
                        <li><a href="#">Разработка сайтов на 1С Битрикс</a></li>
                    </ul>

                    <img src="{{ asset('img/services/development.webp') }}" alt="Разработка сайтов" loading="lazy">
                </article>

                <article class="services__card">
                    <h3>Сопровождение сайтов</h3>
                    <ul>
                        <li><a href="#">Комплексное сопровождение сайтов</a></li>
                        <li><a href="#">Сопровождение сайтов на Wordpress</a></li>
                        <li><a href="#">Сопровождение сайтов на 1С Битрикс</a></li>
                    </ul>

                    <img src="{{ asset('img/services/support.webp') }}" alt="Сопровождение сайтов" loading="lazy">
                </article>

                <article class="services__card">
                    <h3>Графический дизайн</h3>
                    <ul>
                        <li><a href="#">Разработка логотипа</a></li>
                        <li><a href="#">Разарботка буклета</a></li>
                        <li><a href="#">Разработка фирменного стиля</a></li>
                    </ul>

                    <img src="{{ asset('img/services/design.webp') }}" alt="Графический дизайн" loading="lazy">
                </article>
            </div>
        </div>
    </section>

    <section id="about-company" class="about-company">
        <div class="container text_styles">
            <h2>Давайте познакомомся</h2>

            <p>Рад приветствовать вас на нашем сайте, меня зовут Андрей Смирнов, я создатель и руководитель проекта АСМИ
                Студио. Я со своими партнерами и коллегами работаю на рынке digital - решений с 2007 года. За это время мы
                реализовали множество успешных проектов и накопили богатый опыт по интеграции цифровых решений для бизнеса.
            </p>

            <p>Сфера нашей деятельности очень разнообразна, мы помогаем нашим клиентам в разработке web-приложений для
                бизнеса, интегрируем готовые решения по внутреннему учету и автоматизации бизнес-процессов. Так же мы можем
                помочь брендировании и разработке дизайн решений для ваших продуктов.</p>

            <p>Мы не большая команда профессионалов, но каждый из нас обладает уникальными навыками и опытом, который может
                помочь вашему бизнесу развиваться и стать более успешным.</p>

            <p>Вам понравится работать с нами если вы устали от шаблонных подходов крупных игроков digital-рынка где каждое
                изменение сопровождается бесконечными созвонами и согласованиями. Индивидуальный подход к проекту - для нас
                это не шаблонная фраза а реальный подход к выполнению поставленных задач.</p>
        </div>
    </section>

    <section id="partners" class="partners">
        <div class="container">
            <h2>Нам доверяют</h2>

            <div class="partners__marquee">
                <div class="partners__track">
                    <img src="{{ asset('img/partners/partner_0.webp') }}" alt="Партнер 0" loading="lazy">
                    <img src="{{ asset('img/partners/partner_1.webp') }}" alt="Партнер 1" loading="lazy">
                    <img src="{{ asset('img/partners/partner_2.webp') }}" alt="Партнер 2" loading="lazy">
                    <img src="{{ asset('img/partners/partner_3.webp') }}" alt="Партнер 3" loading="lazy">
                    <img src="{{ asset('img/partners/partner_4.webp') }}" alt="Партнер 4" loading="lazy">
                    <img src="{{ asset('img/partners/partner_5.webp') }}" alt="Партнер 5" loading="lazy">
                    <img src="{{ asset('img/partners/partner_6.webp') }}" alt="Партнер 6" loading="lazy">
                    <img src="{{ asset('img/partners/partner_7.webp') }}" alt="Партнер 7" loading="lazy">
                    <img src="{{ asset('img/partners/partner_8.webp') }}" alt="Партнер 8" loading="lazy">
                    <img src="{{ asset('img/partners/partner_9.webp') }}" alt="Партнер 9" loading="lazy">
                    <img src="{{ asset('img/partners/partner_9_1.webp') }}" alt="Партнер 9-1" loading="lazy">
                    <img src="{{ asset('img/partners/partner_10.webp') }}" alt="Партнер 10" loading="lazy">
                    <img src="{{ asset('img/partners/partner_11.webp') }}" alt="Партнер 11" loading="lazy">
                    <img src="{{ asset('img/partners/partner_12.webp') }}" alt="Партнер 12" loading="lazy">
                    <img src="{{ asset('img/partners/partner_13.webp') }}" alt="Партнер 13" loading="lazy">
                    <img src="{{ asset('img/partners/partner_14.webp') }}" alt="Партнер 14" loading="lazy">
                </div>
                <div class="partners__track" aria-hidden="true">
                    <img src="{{ asset('img/partners/partner_0.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_1.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_2.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_3.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_4.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_5.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_6.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_7.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_8.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_9.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_9_1.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_10.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_11.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_12.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_13.webp') }}" alt="" loading="lazy">
                    <img src="{{ asset('img/partners/partner_14.webp') }}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section>
@endsection
