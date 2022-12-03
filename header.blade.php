<header class="header">
    <div class="header__top">
        <div class="header__logo">
            <a href="/">
                <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/grassroots-wellness-logo.jpg" />
            </a>
        </div>

        <div class="header__cta">
            @include('partials.header-search-form')
            <span class="header__cta-separator"></span>
            <a class="header__shopping-cart" href="/shopping-cart">
                <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-cart.png" />
                <!-- <span>[<span>[[shopping-cart count]]</span>]</span> -->
                <span>[<span>{{ ShoppingCart::count() }}</span>]</span>
            </a>
        </div>
    </div>

    <div class="header__main">
        <div class="header__logo header__logo--visible-xxxl">
            <a href="/">
                <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/grassroots-wellness-logo.jpg" />
            </a>
        </div>
        @include('partials.navigation')
        <div class="header__cta header__cta--visible-xxxl">
            @include('partials.header-search-form')
            <span class="header__cta-separator"></span>
            <a class="header__shopping-cart" href="/shopping-cart">
                <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-cart.png" />
                <!-- <span>[<span>[[shopping-cart count]]</span>]</span> -->
                <span>[<span>{{ ShoppingCart::count() }}</span>]</span>
            </a>
        </div>
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
