<header>
    <div class="top-nav container">
        <div class="top-nav-left">
            <div class="logo"><a href="/">Laravel Ecommerce</a></div>
            @if (! (request()->is('checkout') || request()->is('guestCheckout')))
                {{ menu('main', 'partials.menus.main') }}
                {{--        <ul>--}}
                {{--            <li><a href="{{ route('shop.index') }}">Shop</a></li>--}}
                {{--            <li><a href="#">About</a></li>--}}
                {{--            <li><a href="#">Blog</a></li>--}}
                {{--            <li>--}}
                {{--                <a href="{{ route('cart.index') }}">Cart <span class="cart-count">--}}
                {{--                    @if (Cart::instance('default')->count() > 0)--}}
                {{--                    <span>{{ Cart::instance('default')->count() }}</span></span>--}}
                {{--                    @endif--}}
                {{--                </a>--}}
                {{--            </li>--}}
                {{--        </ul>--}}
            @endif
        </div>
        @if (!(request()->is('checkout') || request()->is('guestCheckout')))
            <div class="top-nav-right">
                @include('partials.menus.main-right')
            </div>
        @endif
    </div> <!-- end top-nav -->
</header>
