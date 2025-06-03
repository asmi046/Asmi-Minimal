<div class="top">
    <a  href="{{ route('home') }}">
        <img class="logo logo_white" src="{{ asset('img/logo.svg') }}" alt="">
        <img class="logo logo_black" src="{{ asset('img/logo-black.svg') }}" alt="">
    </a>


    <div class="contacts">
        <a href="{{ config('contacts.tg_link') }}" class="sl_link tg_link">
            <svg class="sprite_icon __white">
                <use xlink:href="#tg_icon"></use>
            </svg>

            <svg class="sprite_icon __black">
                <use xlink:href="#tg_icon_black"></use>
            </svg>
        </a

        <a href="{{ config('contacts.ws_link') }}" class="sl_link ws_link">
            <svg class="sprite_icon __white">
                <use xlink:href="#ws_icon"></use>
            </svg>

            <svg class="sprite_icon __black">
                <use xlink:href="#ws_icon_black"></use>
            </svg>
        </a>

        <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
    </div>
</div>
