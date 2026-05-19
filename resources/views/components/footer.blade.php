 <footer id="site-footer" class="site-footer">
     <div class="container">
         <div class="site-footer__grid">

             <div class="site-footer__col site-footer__col--logo">
                 <a href="{{ route('home') }}" aria-label="На главную">
                     <img src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name') }}" class="site-footer__logo">
                 </a>
             </div>

             <div class="site-footer__col">
                 <h2>Услуги</h2>
                 <ul>
                     <li><a href="#">Разработка интернет магазина</a></li>
                     <li><a href="#">Разработка корпоративного сайта</a></li>
                     <li><a href="#">разработка посадочной страницы</a></li>
                     <li><a href="#">Разработка сайтов на Wordpress</a></li>
                     <li><a href="#">Разработка сайтов на 1С Битрикс</a></li>
                 </ul>
             </div>

             <div class="site-footer__col">
                 <h2>Меню</h2>
                 <ul>
                     <li><a href="#">Услуги</a></li>
                     <li><a href="#">Портфолио</a></li>
                     <li><a href="/contacts">Контакты</a></li>
                     <li><a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx">Политика конфиденциальности</a>
                     </li>
                     <li><a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">Согласие на обработку персональных
                             данных</a></li>
                 </ul>
             </div>

             <div class="site-footer__col site-footer__col--contacts">
                 <a class="phone site-footer__phone"
                     href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>

                 <div class="site-footer__messengers">
                     <a href="{{ config('contacts.tg_link') }}" class="sl_link tg_link">
                         <svg class="sprite_icon __white">
                             <use xlink:href="#tg_icon"></use>
                         </svg>
                     </a>
                     <a href="{{ config('contacts.max_link') }}" class="sl_link max_link">
                         <svg class="sprite_icon __white">
                             <use xlink:href="#max_icon"></use>
                         </svg>
                     </a>
                 </div>

                 <p class="site-footer__inn">ИНН: {{ config('contacts.inn') }}</p>
                 <p class="site-footer__ogrn">ОГРН: {{ config('contacts.ogrn') }}</p>


             </div>

         </div>
     </div>
 </footer>
