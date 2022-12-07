<header class="header">
    <div class="header__top">
        <div class="header__logo header__logo--hidden-xxxl">
            <a href="/">
                <img src="https://media.cmsmax.com/tmunp2kmbgatk4md42bt4/amusement-plus-logo.png" />
            </a>
        </div>

        <div class="header__cta">
            <div class="header__contact-phone">
                <img src="https://media.cmsmax.com/tmunp2kmbgatk4md42bt4/icon-phone.png">
                CALL
                <a href="tel:716-699-4474">(716)699-4474</a>
            </div>
            <span class="header__cta-separator"></span>
            @include('partials.header-search-form')
            <span class="header__cta-separator"></span>
            <a class="header__shopping-cart" href="/shopping-cart">
                <img src="https://media.cmsmax.com/tmunp2kmbgatk4md42bt4/icon-cart.png" />
                <!-- <span>[<span>[[shopping-cart count]]</span>]</span> -->
                <span>[<span>{{ ShoppingCart::count() }}</span>]</span>
            </a>
        </div>
    </div>

    <div class="header__main">
        <div class="header__logo header__logo--visible-xxxl">
            <a href="/">
                <img src="https://media.cmsmax.com/tmunp2kmbgatk4md42bt4/amusement-plus-logo.png" />
            </a>
        </div>
        @include('partials.navigation')
    </div>
</header>

@section('footer-js')
@parent

    <script>
        $(function() {
            $(".header__search-form form").hover(function() {
                $(".header__search-form form>.form-group>input").focus();
            }, function(){
                $(".header__search-form form>.form-group>input").blur();
            });
        });
    </script>

@endsection
